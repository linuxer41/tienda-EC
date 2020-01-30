import os
import subprocess
logs = "out.log"
dir = "/root/zh_cn/"
def logger(text):
    with open(dir+logs, "a+") as f:
        f.write(text)
def ls_files(dir):
    files = list()
    for item in os.listdir(dir):
        abspath = os.path.join(dir, item)
        try:
            if os.path.isdir(abspath):
                files = files + ls_files(abspath)
            else:
                files.append(abspath)
        except FileNotFoundError as err:
            print('invalid directory\n', 'Error: ', err)
    return files

script = """$lan = array();
foreach ($_LANG as $key => $value) {
    if (gettype($value)=="string") {
        array_push($lan, $value);
    } else {
        foreach ($value as $k => $v) {
            if (gettype($v)=="string") {
                array_push($lan, $v);
            } else {
                foreach ($v as $r => $w) {
                    array_push($lan, $w);
                }
            }
        }
    }
}
function translate($url){
    $json = file_get_contents ($url);
    $arr = explode('[[["', $json);
    $text = explode('","', $arr[1]);
    return $text[0];
}
function logger($text)
{
    $fp = fopen(dirname(__FILE__)."/"."out.log", 'a');
    fwrite($fp, $text.PHP_EOL);  
    fclose($fp); 
}
function replace_text($t1)
{
    $url = "https://translate.googleapis.com/translate_a/single?client=gtx&sl=zh&tl=es&dt=t&q=".urlencode($t1);
    $tr_text=translate($url);
    // $tr_text="";
    if (strlen($tr_text)>=1) {
        print($tr_text."\n");
        logger($tr_text);
        $filename = dirname(__FILE__)."/".basename(__file__);
        $str=file_get_contents($filename);
        $str=str_replace("'".$t1."'", "'".$tr_text."'",$str);
        $str=str_replace('"'.$t1.'"', "'".$tr_text."'",$str);
        file_put_contents($filename, $str);
    }
    
}
foreach ($lan as $key => $value) {
    replace_text($value);
    sleep(8);
}"""
for fl in ls_files(dir):
    if str(fl).endswith(".php"):
        text = ""
        with open(fl) as fobj:
            text = fobj.read()
        if text.find("$_LANG['") >=1:
            with open(fl, "a+") as f:
                f.write(script)
            try:
                logger("ejecutando: "+ "php {}".format(fl))
                print("ejecutando: "+ "php {}".format(fl))
                os.system("php {}".format(fl))
            except OSError as err:
                logger("error: "+ "php {}".format(fl))
                print("error: "+ "php {0}{1}".format(fl, err))
