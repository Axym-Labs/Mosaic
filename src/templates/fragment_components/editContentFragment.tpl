

<div>
    <label for="Position">Position:</label>
    <input type="number" id="Position" name="Position" placeholder="Enter Position" value="{$subsiteCf['Position']}">
</div>
<div>
    <label for="BackgroundColor">Background Color (HEX):</label>
    <input type="text" id="BackgroundColor" name="BackgroundColor" maxlength="6" value="{$subsiteCf['BackgroundColor']}">
</div>
<div>
    <label for="Opacity">Opacity (0-1):</label>
    <input type="number" id="Opacity" name="Opacity" step="0.01" value="{$subsiteCf['Opacity']}">
</div>
<div>
    <label for="BackgroundImage">Background Image:</label>
    <input type="file" id="BackgroundImage" name="BackgroundImage" accept=".jpg, .jpeg">
</div>