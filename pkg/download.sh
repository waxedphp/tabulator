#!/bin/bash

#PKG="https://github.com/olifolkerd/tabulator/archive/refs/tags/5.3.1.zip"
#wget -O ./package.1.zip "$PKG"
#unzip ./package.1.zip


gh-clone-latest() {
  local owner=$1 project=$2
  local output_directory=${3:-$owner-$project-release}
  local release_url=$(curl -Ls -o /dev/null -w %{url_effective} https://github.com/$owner/$project/releases/latest)
  echo $release_url;
  local release_tag=$(basename $release_url)
  echo $release_tag
  #git clone -b $release_tag -- https://github.com/$owner/$project.git $output_directory
}

gh-clone-latest "olifolkerd" "tabulator"
