#########################
FUNCIONAMENTO DO SISTEMA
#########################

Foi adicionado na crontab do linux o segunte comando:

* * * * * wget http://18.228.158.230/desafiowide2 -O /dev/null

Esse comando é executado a cada minuto, carregando o sistema, que tem como função ler e salvar os retornos de todas as URLs previamente cadastradas.
