#!/usr/bin/env bash
# (@)/runTest
# Testing out some shell commands

#set -x    # This will output every cmd in this script to terminal
#echo '$HOME *** `date`'
#echo "$HOME *** `date`"

MACHINE=`uname -n`
NUM_FILES=$(ls | wc -l)

MYDATE=$(date)
MODATE=`date`

echo '$0' "$0 is the first"
echo '$1' "$1 is the 2nd"
#echo '$2' "$2 is the 3rd"
#echo '$#' "$# is how many parameters"
#echo '$@ or $*' "$@ is the arguments themselves"
#echo '$?' "$? is the exit status"
shift  # shifts left the args to $ vars.
echo "$1"
echo "$*"

#read -p "Type in an adjective, noun and verb (past tense):" a1 n1 v1
#echo "He sighed and $v1 to the elixir. Then he ate the $a1 $n1"

#MYFILENAME=/home/digby/myfile.txt
#FILE1=${MYFILENAME%%t*}    # These are string slice command types
#echo ${FILE1}

BIGNUM=1024
RES=`expr $BIGNUM / 16`
RES=`echo "$BIGNUM / 16" | bc`
#let foo=$BIGNUM/2 ; echo $foo


# Test conditional statements
TVAR=3
if [ $TVAR = 1 ] ; then
    let TVAR=$TVAR+2
elif [ $TVAR = 2 ] ; then
    let TVAR=$TVAR+3
else
    let TVAR=$TVAR+4
fi
#echo "Actually the variable is $TVAR"

if [ -f "${HOME}/PhpstormProjects/phpTester/shellScripts/values.txt" ] ; then
    DUMB_FILE="${HOME}/PhpstormProjects/phpTester/shellScripts/values.txt"
fi
DUMB_FILE=${DUMB_FILE:-"Never was set"}

# Single-if short-hand: || is FALSE check, && is TRUE check
#[ -f "$DUMB_FILE" ] && echo "File is there"
#[ -f "$DUMB_FILE" ] || echo "File not there"



# Using case statements
case `date +%a` in
    "Mon")
        MYDAY="Mad Monday"
        ;;
    "Tue")
        MYDAY="Tiny Tuesday"
        ;;
    "Wed")
        MYDAY="Wack Wednesday"
        ;;
    *)
        MYDAY="Some day"
        ;;
esac


NUM_SUM=0
for NUMX in 2 45 644 422 21 ; do
    let NUM_SUM+=$NUMX
done

#for FILE_NAME in `ls ${HOME}/PhpstormProjects/phpTester/shellScripts/` ; do
#    echo $FILE_NAME
#done

