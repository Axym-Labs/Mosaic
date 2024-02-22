
Primärschlüssel in Italics
FS = Fremdschlüssel

##### User
- *UserId* (Serial)
- Email (unique)
- LastName 
- FirstName 
- FK:Plan

### Website
- FS: *UserId*
- *WebsiteId*
- SubRoute

### WebsiteContentFragment
- FS:*WebsiteId*
- Position (Unique) (Zeile)
- Color
- Opacity
- Spannable (bei größerem screen 1 von 2 spalten)
(blurred)

### Plan
- *PlanId*
- Name
- Visible (bool)
- *PlanPermissionId*

### PlanPermission
- *PlanPermissionId*
- BackgroundOption (bool)
- ColorOption
- OpacityOption
- FontOption
- MoreImagesOption
- ShortLinkOption
- SubSiteLimit (int)
- MoreImagesLimit
