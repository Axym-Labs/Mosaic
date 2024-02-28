import os


def loadFile(file):
    with open(file, "r") as f:
        return f.read()

def extract_column_names(fileStr):
    # extract column names
    column_names = []
    for line in fileStr.split("\n"):
        if "INSERT INTO" in line:
            column_names = line.split("(")[1].split(")")[0].split(", ")
            column_names = [column_name.replace("`", "") for column_name in column_names]
            break
    return column_names

def simplifyColumnName(fileStr):
    # replace [column-1] with [column]
    fileStr = fileStr.replace("[column-1]", "[column]")
    return fileStr

def replace_value(fileStr):
    # replace [value-1] with [value]
    fileStr = fileStr.replace("[value-1]", "[value]")
    return fileStr

def replace_value_with_id(fileStr):
    # replace [value-2] with [Id]
    fileStr = fileStr.replace("[value-2]", "[value-Id]")
    return fileStr

def replace_value_with_column_name(fileStr, columnNames):
    # replace [value-<n>] with [value-<column-name>]
    for i in range(1, len(columnNames) + 1):
        fileStr = fileStr.replace(f"[value-{i}]", f"[value-{columnNames[i-1]}]")
    return fileStr

def saveFile(fileName, fileStr):
    with open(fileName, "w") as f:
        f.write(fileStr)

def logChanges(fileName, fileStr):
    print(f"Changes made to {fileName}")
    print("was:")
    print(loadFile(fileName))
    print("now:")
    print(fileStr)
    print("-------------------")

def saveColumnNames(root, columnNames):
    with open(os.path.join(root, "columnNames.txt"), "w") as f:
        f.write("\n".join(columnNames))

# iterate over each file
for root, dirs, files in os.walk(os.getcwd()):
    for fileName in files:
        fileName = os.path.join(root, fileName)
        if fileName.endswith("insert.sql"):
            fileStr = loadFile(fileName)
            # extract column names in order
            column_names = extract_column_names(fileStr)
            # replace [value-<n>] with [value-<column-name>]
            fileStr = replace_value_with_column_name(fileStr, column_names)
            logChanges(fileName, fileStr)
            saveColumnNames(root, column_names)
            # saveFile(fileName, fileStr)
        elif fileName.endswith("update.sql"):
            fileStr = loadFile(fileName)
            # replace [column-1] with [column]
            fileStr = simplifyColumnName(fileStr)
            # replace [value-1] with [value]
            fileStr = replace_value(fileStr)
            # replace [value-2] with [Id]
            fileStr = replace_value_with_id(fileStr)
            logChanges(fileName, fileStr)
            # saveFile(fileName, fileStr)
