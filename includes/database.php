<?php ${"G\x4c\x4f\x42\x41\x4c\x53"}["s\x75\x6ehsr\x6d\x63\x66\x74"]="d\x62";require_once("inclu\x64e\x73/c\x6fnfig\x2ep\x68p");function getDB(){try{${${"G\x4c\x4f\x42\x41\x4c\x53"}["\x73\x75nhs\x72\x6d\x63f\x74"]}=new PDO("\x6d\x79\x73\x71l:\x68ost=".DB_HOST.";\x63h\x61\x72\x73\x65t=utf\x38\x6d\x62\x34\x3b\x64bn\x61\x6d\x65\x3d".DB_NAME,DB_USER,DB_PASSWORD);if(IS_PRODUCTION){$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_SILENT);}else{$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);}$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);${"\x47\x4c\x4f\x42AL\x53"}["\x6f\x65\x76\x77\x74\x68\x75\x6f\x70\x63\x63\x61"]="\x64b";return${${"G\x4c\x4f\x42\x41\x4c\x53"}["\x6fe\x76\x77\x74\x68u\x6f\x70cc\x61"]};}catch(PDOException$e){echo"<p\x20c\x6c\x61ss=\x22\x62\x67-d\x61n\x67er\x22\x3e".$e->getMessage()."</p>";return null;}}
?>