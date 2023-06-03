#include <iostream>
#include <vector>
#include <string>
#include <sys/stat.h>

int main() {
    std::cout << "Hello World!" << std::endl;
    std::vector<std::string> folderNames = {"exp", "v5", "v6", "v7"};
    std::string dirPath = "./";
    int counter = 0;
    for (const auto& folderName : folderNames) {
        struct stat buffer;
        if (stat((dirPath + folderName).c_str(), &buffer) == 0) {
            std::cout << (dirPath + folderName).c_str() << " exists." << std::endl;
        } else {
            std::cout << (dirPath + folderName).c_str() << " does not exist." << std::endl;
        }
        counter ++;
    }
    std::cout << "Total folders: " << counter << std::endl;
    return 0;
}
