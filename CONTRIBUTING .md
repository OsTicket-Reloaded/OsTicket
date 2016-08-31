Como Contribuir com o OsTicket Reload
=====================================

Esta primeira versão de como contribuir com o OsTicket Reload será escrita em português. Sinta-se a vontade em traduzi-la para seu idioma, para isso crie um arquivo de mesmo noome porém acrescendo ao final do nome a abreviatura do Idioma conforme o mesmo padrão ISO-639.1, lembre-se sempre de a condificação UTF-8 como padrão, a não ser que seu idioma obrigue outra.

Por exemplo para o Idioma Espanhol use o nome CONTRIBUTING.es.md. Quando este arquivo for traduzido a primeira vez para o idioma inglês deverá ser criado no formado CONTRIBUTING.en.md e assim o conteúdo deste arquivo será copiado para CONTRIBUTING.pt.md e neste passar a conter as referências para os novos arquivos. mantendo uma copia do inglês para referência

Para colaborar com este projeto abra primeiro um Issue e veja se não há nenhum outro profissional já fazendo o mesmo trabalho, e convide seus colegas a colaborar fazendo referência ao nome deles, use este link https://github.com/OsTicket-Reloaded/OsTicket/issues para abrir o Issue no repositório oficial.

Em seguida faça um fork deste projeto com base no repositório https://github.com/OsTicket-Reloaded/OsTicket, você pode usar um Fork de um amigo, mas isso poderá criar dificuldades para fazer PullRequest diretamente para o repositório oficial qu é este do link informado. Lembre-se de informar no Issue aberto como sugerido acima, o novo link de seu Fork para que todos possam visitar e colaborar.

Em seguida ao Fork antes de qualquer alteração crie um branch com seu nome, preferencialmente algo como `master-seunome` este branch irá conter as alterações que serão particulares, que lhe pertence e não devem ser repassadas para nosso repositório oficial. Use então este novo branche para personalizar sua versão, mas não comece ainda, continue lendo.

Agora volte ao branch master, e crie um branch `master-translate-seuidioma`, por exemplo se for traduzir para o idioma **Fula** você deverá então criar o branch `master-translate-ff`, sempre use a abreviaão com base no código ISO-639.1, veja o arquivo [Language Codes em formato CSV na pasta docs](docs/language-codes.csv).

Se pretende ajudar com outro problema, uma melhoria ou uma correçãod e bug, ou o merge de um recurso de uma nova versão do OsTickets, pocure sempre criar o novo branch informando isso, por exemplo a proposta de um novo layout, crie o branch `layout-nomenovo`, se for um novo recurso crie `resource-nomedorecurso`

SEmpre que criar os novos Branchs conforem a funcionalidade trabalhada neles, ou tradução, crie no inicio dele uma TAG, de nome similar: `Begin-work_translation-seuidioma` para recurso crie por exemplo `Begin-work_resource-nomedorecurso`, se for um layout faça `Begin-work_layout-nomedolayout`

Quando terminar o trabalho no novo branch marque com uma TAG informando o fim `End-work_translation-seuidioma-versao`, a versão é para sabermos que versão está usando do trabalho, pois pode haver futuras correções e acrescimos, incremente a versão sempre que retomar o trabalho, e sempe comece com a verão `0.1` Iremos dicsutir este metodo futuramente.

Para cada TAG, você pode inserir anotações na tag que contribuam com o entedimento de seu trabalho, use as anotações para compor seu PullRequest futuramente.

Por hora é só isso, caso tenha dúvida abra um [Issue](https://github.com/OsTicket-Reloaded/OsTicket/issues) fazendo referência a este arquivo.
