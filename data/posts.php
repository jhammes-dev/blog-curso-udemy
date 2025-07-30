<?php

  $posts = [
    [
      'id' => 1,
      'title' => 'O dia em que o = destruiu meu if',
      'description' => 'Você já passou horas tentando entender por que seu if está sempre retornando verdadeiro, mesmo quando não devia? Spoiler: talvez você tenha usado = em vez de ==.',
      'situations' => ' Neste relato real (e um pouco vergonhoso), conto como um simples sinal de igual quase me fez jogar o notebook pela janela.<br> Então lá estava eu, orgulhoso do meu código. Um simples formulário de login, um if básico pra verificar a senha, e... nada funcionava. Pior: funcionava errado.<br><br>
          A cada tentativa, por mais absurda que fosse a senha, o sistema aceitava. Digitei “banana123” e ele respondeu: “Senha correta!”. Pensei: "Será que inventei a senha mágica sem querer?"
          Depois de 20 minutos alternando entre raiva e negação, percebi: Usei = no lugar de ==.<br><br>
          Mas foi aí que aprendi algo importante: atenção aos detalhes é essencial, e, mais do que isso, é importante ter calma e um olhar cuidadoso para encontrar os bugs escondidos. E, claro, que às vezes o erro mais simples pode ser o que mais consome nosso tempo.<br>
          Hoje, sempre que começo a revisar meu código, dou uma atenção especial para esses pequenos detalhes — afinal, um simples = pode destruir toda a lógica do if e colocar meu dia de cabeça para baixo',
      'tags' => ['#Buglândia', '#404Humor', '#ProgramadorSofre'],
      'img' => 'prog-1.jpg'
    ],
    [
      'id' => 2,
      'title' => 'Quando o banco virou um ladrão de tempo',
      'description' => 'Tudo estava indo bem… até eu decidir conectar o sistema ao banco de dados.',
      'situations' => 'Um simples SELECT * FROM usuarios travou o sistema. Achei que fosse lentidão da internet, mas não… era lentidão da minha lógica mesmo.<br>
          Passei quase uma hora tentando entender por que o sistema estava carregando como se estivesse puxando dados da NASA. Até que percebi: eu estava fazendo consultas dentro de um loop sem necessidade — e ainda com fetchAll() chamando tudo, até o que nem precisava.<br>
          Resultado: levei um "assalto de desempenho" bem ali, no meu próprio sistema. Corrigi refatorando o código, movendo a consulta para fora do loop e usando LIMIT, WHERE, o básico bem-feito.<br>
          Moral da história?<br>
          Banco de dados é amigo… mas mal usado, vira vilão de performance!',
      'tags' => ['#php', '#sql', '#deviniciante'],
      'img' => 'prog-2.jpg'
    ],
    [
      'id' => 3,
      'title' => 'O dia em que o CSS destruiu minha autoestima',
      'description' => 'Era só uma tela de login. Só isso.',
      'situations' => 'Simples. Até que decidi “estilizar rapidinho”. Usei um pouco de flex, um pouco de margin: auto, e de repente... sumiu tudo. A logo foi parar na parte de baixo, o botão ficou flutuando no canto esquerdo e o formulário estava… invisível.<br>
          A cada F5 parecia que o CSS estava rindo da minha cara. O pior: eu tinha esquecido de linkar o arquivo CSS. Sim, isso mesmo. Um erro tão básico quanto esquecer o feijão no fogo.<br>
          Depois de rir (e quase chorar), percebi a importância de revisar cada passo com calma. Agora, o link rel="stylesheet" virou quase um mantra no início de cada projeto.',
      'tags' => ['#frontendFail', '#htmlCss', '#aprendizado'],
      'img' => 'prog-3.jpg',
    ],
    [
      'id' => 4,
      'title' => 'A variável fugitiva',
      'description' => 'Declarei uma variável dentro de uma função achando que podia usá-la em qualquer lugar.',
      'situations' => 'No meu PHPzão bonito:<br><br>
          function calculaTotal() {<br>
          $total = 100;<br>
          }<br>
          echo $total;<br><br>
          Resultado? Erro na tela, de boas.<br>
          Na minha cabeça, a variável tinha que estar ali fora, afinal… ela existe, né? Existe, mas só dentro da função! Aprendi ali, com uma bela mensagem de erro e uma dose de humildade, que escopo não é brincadeira.<br>
          Solucionei trazendo o return $total pra função e capturando com uma variável fora. E desde então, nunca mais confundi escopo com zona livre de bugs.',
      'tags' => ['#humordev', '#phpiniciante', '#escopo'],
      'img' => 'prog-4.jpg'
    ],
  ];