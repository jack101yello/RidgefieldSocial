#/bin/bash
email=$( cat users.txt | grep $1 | cut -d ',' -f 3 )
cat Shell/mailingListDB.txt | grep -v "${email}" > Shell/mailingListDB.txt
