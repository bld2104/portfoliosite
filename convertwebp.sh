for PHOTO in images/*.jpg
   do
       BASE=`basename $PHOTO`
	convert "$PHOTO" "images/$BASE.webp"

   done