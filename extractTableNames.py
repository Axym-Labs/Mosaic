import os
import re

# open mosaic.sql in the queries folder
with open('mosaic.sql', 'r') as file:
    data = file.read()

# find all create table statements in mosaic.sql
matches = re.findall(r'CREATE TABLE `(\w+)', data)

# for each create table statement in mosaic.sql
for match in matches:
    print(match)
    # for each line after the match
    tableName = match
    columnData = []
    for line in data.split("CREATE TABLE `" + match)[1].split('\n')[1:]:
        if line.startswith('  '):
            columnDefinition = line.strip()
            currentColumnData = columnDefinition.split(' ')[0][1:-1] + ',' + columnDefinition.split(' ')[1]
            print(currentColumnData)
            columnData.append(currentColumnData)
        else:
            break

    # open text file with the same name as the table
    os.makedirs("queries/" + tableName)
    with open("queries/" + tableName + "/definition.csv", 'w') as file:
        # write the column definitions to the text file
        for columnDefinition in columnData:
            file.write(columnDefinition + '\n')
    