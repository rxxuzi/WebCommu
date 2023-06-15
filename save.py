#check this directory

import os


def  check_dir(dir_name):
    if not os.path.exists(dir_name):
        os.mkdir(dir_name)

input = raw_input("Enter the name of the directory to be created: ")

check_dir(input)

check_dir(input)

print ("(^_^Directory created successfully")

#check this directory

