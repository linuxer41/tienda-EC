def replace(filename, text, replace_text):
    with open(filename,'r') as file:
        filedata = file.read()
        filedata = filedata.replace(text,replace_text)
    with open(filename,'w') as file:
        file.write(filedata)
# codigo php
""" 
$filename = dirname(__FILE__)."/".basename(__file__).".lang";
$file = fopen($filename, "w");
foreach ($_LANG as $key => $value) {
    # code...
    fwrite($file,$value.PHP_EOL);
}
fclose($file); """
def main():
    folder_name = "/home/linuxer/dev/web_chinas/store/include/languages/es_bo/"
    
    file_lang_or = open(folder_name+"shopping_flow.php_or.lang", "r")
    file_lang_es = open(folder_name+"shopping_flow.php.lang", "r")
    trans = []
    for line in file_lang_es:
        trans.append(line)
    lang = {}
    i=0
    for line in file_lang_or:
        lang[line]=trans[i]
        i+=1

    for i in lang.keys():
        replace(folder_name+"shopping_flow.php","'"+str(i).split("\n")[0]+"'", "'"+str(lang[i]).split("\n")[0]+"'")
        replace(folder_name+"shopping_flow.php",'"'+str(i).split("\n")[0]+'"', "'"+str(lang[i]).split("\n")[0]+"'")
if __name__ == '__main__':
    main()