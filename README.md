# Library2
# Ensure you are on the main branch
git checkout main

# Create and switch to homepage branch (if it doesn't exist)
git checkout -b homepage

# OR, switch to homepage if it already exists
git checkout homepage

# Merge changes from main (optional, if homepage is behind main)
git merge main

# Move your files as needed (example: moving a file called file.txt)
git mv path/to/file.txt new/path/on/homepage/file.txt

# Or copy files if you want to keep them in both places
cp path/to/file.txt new/path/on/homepage/file.txt

# Add and commit the changes
git add .
git commit -m "Moved files from main to homepage branch"

# Push the homepage branch to remote
git push origin homepage
