#/bin/bash
email=$( cat users.txt | grep "${1}" | cut -d ',' -f 3 )
cat Shell/mailingList.txt | grep -v "${email}" > Shell/mailingList.txt
echo "The user is: ${email}"
cat Shell/mailingList.txt
echo "${email}" >> Shell/mailingList.txt
echo "The name being added is:"
cat Shell/mailingList.txt
