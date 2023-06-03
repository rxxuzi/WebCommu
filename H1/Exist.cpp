//display "Hello World" 10times
#include <iostream>
#include <fstream>
#include <iostream>
#include <vector>
#include <filesystem>

bool file_exists(const std::string & filename) {
    std::ifstream ifs(filename);
    return ifs.is_open();
}

int main() {
    //Hello World
    std::cout << "Hello World!" << std::endl;
    std::vector<std::string> folderNames = {"exp", "v5", "v6", "v7"};
    std::string dirPath = "H1/";
    for (const auto& folderName : folderNames) {
        if (std::filesystem::exists(dirPath + folderName)) {
            std::cout << folderName << " exists." << std::endl;
        } else {
            std::cout << folderName << " does not exist." << std::endl;
        }
    }
    return 0;
}


