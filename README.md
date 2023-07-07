# Strategy

O Strategy é um padrão de projeto comportamental que permite que você defina uma família de 
algoritmos, coloque-os em classes separadas, e faça os objetos deles intercambiáveis.

Ele sugere que você pegue uma classe que faz algo específico m diversas maneiras diferentes e extraia todos esses agoritmos para classes separadas chamadas estratégias.

A classe original, chamada contexto, deve ter um campo para armazenar uma referência para uma dessas estratéias. O contexto delega o trabalho para um objeto estratégia ao invés de executá-lo por conta própria.

O contexto não é responsável por selecoinar um algoritmo apropriado para o trabalho. Ao invés disso, o cliente passa a estratégia desejada para o contexto. Na verdade, o contexto não sabe muito sobre as estratégias. Ele trabalha com todas elas através de uma interface genérica, que somente expões um único método para acionar o algoritmo encapsulado dentro da estratégia selecionada.

Desta forma o contexto se torna indpendente das estratéias concretas, então você pode adicionar novos algoritmos ou modificar os existentes sem modificar o código do contexto ou outas estratégias.
