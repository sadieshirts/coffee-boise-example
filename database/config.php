<?php
	$localhost_cleardb_url = "mysql://b5fc874d9cf9ae:870522cd@us-cdbr-iron-east-05.cleardb.net/heroku_721eed3cab5fcfb?reconnect=true";

	if(!getenv("CLEARDB_DATABASE_URL")){
		putenv("CLEARDB_DATABASE_URL=$localhost_cleardb_url");
	}