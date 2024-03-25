{"version":3,"file":"ui.uploader.tile-widget.bundle.map.js","names":["this","BX","UI","exports","ui_progressround","main_popup","ui_icons_generator","main_core","main_core_events","ui_uploader_core","DropArea","inject","mounted","uploader","assignBrowse","$refs","dropArea","computed","dropLabel","Loc","getMessage","template","UploadLoader","props","progress","type","Number","default","width","lineSize","colorTrack","String","colorBar","rotation","Boolean","createProgressbar","watch","updateProgressbar","methods","loader","ProgressRound","value","color","Color","SUCCESS","renderTo","container","update","ErrorPopup","error","Object","alignArrow","popupOptions","emits","newValue","errorPopup","destroy","createPopup","show","created","beforeUnmount","createContent","Type","isStringFilled","isObject","message","description","content","defaultOptions","isElementNode","bindElement","targetNode","targetNodeWidth","offsetWidth","cacheable","animation","events","onDestroy","$emit","onShow","event","popup","getTarget","getPopupContainer","style","display","popupWidth","offsetLeft","angleShift","Popup","getOption","setAngle","offset","setOffset","options","assign","FileIconComponent","name","size","icon","FileIcon","fileType","$el","TileItem","components","item","data","tileId","Text","getRandom","toLowerCase","showError","FileStatus","status","UPLOADING","LOAD_FAILED","UPLOAD_FAILED","fileSize","LOADING","includes","origin","FileOrigin","SERVER","sizeFormatted","errorPopupOptions","darkMode","offsetTop","minWidth","maxWidth","clampedFileName","nameParts","originalName","split","length","pop","nameWithoutExtension","join","substr","menuItems","items","downloadUrl","push","text","href","onclick","remove","menu","removeFile","id","handleMouseEnter","handleMouseLeave","showMenu","MenuManager","create","angle","TileList","Array","DragOverMixin","directives","drop","beforeMount","el","binding","vnode","addClass","instance","dragOver","classList","add","removeClass","lastEnterTarget","Event","bind","preventDefault","stopPropagation","target","unmounted","unbindAll","TileWidgetComponent","extends","VueUploaderComponent","mixins","isMounted","closeIcon","padding","bindOptions","position","forceTop","adapter","subscribe","uploaderError","assignDropzone","handlePopupDestroy","TileWidget","VueUploaderWidget","constructor","uploaderOptions","tileWidgetOptions","widgetOptions","isPlainObject","super","getRootComponent","Uploader","Main","Icons","Generator"],"sources":["ui.uploader.tile-widget.bundle.js"],"mappings":"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"}