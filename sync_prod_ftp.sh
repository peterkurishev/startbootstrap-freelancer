#!/bin/bash    
HOST="159.8.4.98"
USER="peterkur"
PASS="RycmBRDe"
FTPURL="ftp://$USER:$PASS@$HOST"
LCD="/home/peter/prj/startbootstrap-freelancer"
RCD="/public_html/dswz.ru"
#DELETE="--delete"
lftp -c "set ftp:list-options -a;
set ssl:check-hostname false;
open '$FTPURL';
lcd $LCD;
cd $RCD;
mirror --reverse \
       $DELETE \
       --verbose \
       --exclude-glob .git/ \
       --exclude-glob node_modules/ \
       --exclude-glob a-file-to-exclude \
       --exclude-glob a-file-group-to-exclude* \
       --exclude-glob other-files-to-exclude"
