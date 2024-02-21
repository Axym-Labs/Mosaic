
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
- Position (Unique) (Spalten & Zeilen, von & bis) (4x Int)

### Plan
- *PlanId*
- Name
- Visible (bool)
- *PlanPermissionId*

### PlanPermission
- *PlanPermissionId*
- BackgroundOption (bool)
- ...Option (bool)
- SubSiteLimit (int)
- ...Limit (int)
