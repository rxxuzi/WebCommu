#check this directory

import os
counter = 0

print(os.getcwd())

def check_dir(dir_name):
    
    if not os.path.exists(dir_name):
        os.mkdir(dir_name)
        
    if os.path.exists(dir_name):
        print('Directory already exists')
        print('Enter the name of directory : ')
        dir_name = input()
        if(dir_name == 'exit'):
            exit(0)
        else:
            check_dir(dir_name)
## input name of directory
dir_name = input('Enter the name of directory : ')
check_dir(dir_name)



