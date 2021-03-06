#!/bin/bash

#!/bin/bash

# Designed for convenience in development
# This file is expected to be merged with advance-submit.sh



printf "Welcome to Boinc registration\n\n"
printf "This script will automatically set up credentials for submitting BOINC jobs\n\n\n"
# Server IP or domain must be declared before
SERVER_IP=149.165.169.133 # Declare it the first time this program is run

# Colors, helpful for printing
NCNC='\033[0m' # No color
GREENGREEN='\033[0;32m'

printf "Enter email to which send results: "
read userEmail


if [[ -z "$userEmail" || "$userEmail" != *"@"*"."* ]]; then 
    printf "${REDRED}Invalid format, not an email\n${NCNC}Program exited\n"
    exit 0
fi


# Gets the account for the org
ORK=$(cat Org_Key1.txt)


# Validates the researcher's email against the server's API
TOKEN=$(curl -s -F email=$userEmail -F org_key=$ORK http://$SERVER_IP:5054/boincserver/v2/api/authorize_from_org)


# Gets the actual user name
IFS='/' read -ra unam <<< "$PWD"
unam="${unam[3]}"

# Adds the username to the database if necessary
registerUser=$(curl -s http://$SERVER_IP:5078/boincserver/v2/api/add_username/$unam/$userEmail/$TOKEN/$ORK)

printf "\n${GREENGREEN}$registerUser${NCNC}\n"
