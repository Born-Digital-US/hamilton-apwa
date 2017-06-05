## Create and configure a webform node.

1. Add *Components* (fields) to capture information from the user. This list might include:
    * User name
    * User email
    * Transcription (text area)
2. *Islandora settings*
    * Enable Islandora Webform
        * Configure settings to determine which islandora objects to display the webform link on.
        * Configure link text.
    * Enable Islandora Webform Ingest
        * Select "Update datastreams on current object"
3. *Workflow settings* - create workflow states and behaviors. Suggestion:
    * Add *Pending Review* and configure email to be sent to reviewer's email address.
    * Under *State settings*, check *Set new submission to the first state*. This will result in new submissions automatically be assigned as "Pending Review", and an email sent to the reviewer.
4. *Form settings*
    * Provide a confirmation message.
    * Choose "no redirect"
    * Configure total and per-user submission limits:
        * You probably want the submission limits to apply per object. 
        * Decide if you want to limit total submissions per object, submissions by the current user per object, or (possibly) both.
        * If you want to restrict new submissions after a previous submission has been ingested, or when a previous submission is in draft, etc., check the workflow states that apply.
    * Enable "Inline Ajax Mode" and "Show confirmation screen"
    * Limit submission access by role - I believe APWA is meant to be limited to authenticated users.
    * Under "Advanced settings":
        * Decide if a user can save drafts and return to continue working later. 
        * And if they can, should they be allowed to continue working on their submission when new submissions are denied?
5. Islandora webform ingest field mapping(s). 
    * Return to the *Components* tab, and edit the field that you want to be able to ingest into an islandora object.
    * There will be a new section of the form *Islandora Ingest Mapping*. 
    * For the transcription field, select "Replace", and "TRANSCRIPT_WF" in the *Datastream* select list.
    
    