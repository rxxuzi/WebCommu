#include <iostream>
#include <vector>
#include <string>
#include <sys/stat.h>
#include <dirent.h>
// namespace fs = std::filesystem;

/**
 * H1内のフォルダが存在するかチェックする為のコード
 * @author RXXUZI
 * @return int 
 */
int main() {
    std::cout << "Hello World!" << std::endl;
    std::vector<std::string> folderNames = {"exp", "v5", "v6", "v7"};
    std::string dir = "./";
    int counter = 0;
    for (const auto& folderName : folderNames) {
        struct stat buffer;

        if (stat((dir + folderName).c_str(), &buffer) == 0) {
            std::cout << (dir + folderName).c_str() << " exists." << std::endl;
        } else {
            std::cout << (dir + folderName).c_str() << " does not exist." << std::endl;
        }
        counter ++;
    }
    std::cout << "Total folders: " << counter << std::endl;
    
    for (const auto& folderName : folderNames) {
        int count = 0;
        DIR *dir;
        struct dirent *ent;
        std::string path = folderName;
        if ((dir = opendir (path.c_str())) != NULL) {
            while ((ent = readdir (dir)) != NULL) {
                if (ent->d_name[0] != '.')
                    count++;
            }
            closedir (dir);
        } else {
            std::cout << "Could not open directory" << std::endl;
        }
        std::cout << folderName << " has " << count << " files." << std::endl;
    }

    return 0;
}
