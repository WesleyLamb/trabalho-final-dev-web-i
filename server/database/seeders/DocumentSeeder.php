<?php

namespace Database\Seeders;

use App\Models\Document;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Document::create([
            'title' => 'A (im)possibilidade de edificações voltadas à hospedagem em Balneário Camboriú em terrenos com metragem inferior a 2.000m2',
            'subtitle' => 'um estudo sobre o mercado de luxo em Balneário Camboriú',
            'filename' => Str::slug('A (im)possibilidade de edificações voltadas à hospedagem em Balneário Camboriú em terrenos com metragem inferior a 2.000m2').'.pdf',
            'publication_year' => 2024,
            'abstract' => 'A presente pesquisa teve como escopo responder se, à luz da legislação municipal em vigor, existe a possibilidade de edificações voltadas à hospedagem em Balneário Camboriú em terrenos com metragem inferior à 2.000m. As decisões administrativas denegatórias vêm arrimadas na Lei Municipal n. 2.396/2004. Diante disso, buscou-se a) investigar se a legislação invocada como fundamento para decisão administrativa que inviabiliza a construção de empreendimentos destinados à hospedagem em terrenos com metragem inferior a 2.000m2 permanece em vigor ou se existe outra normativa no Munícipio de Balneário Camboriú que impeça esses empreendimentos e b) investigou-se a legalidade das decisões administrativas escoradas na Lei municipal 2.396/2004. A teve finalidade básica, do tipo exploratória descritiva, usando-se de dados qualitativos, cujas fontes são de cariz primário e secundário; ademais, lançou-se mão da pesquisa documental e bibliográfica. A pesquisa concluiu que a Lei n. 2.396/2004 perdeu sua vigência e, via de efeito, não foram localizados na legislação municipal de Balneário Camboriú impedimentos para as construções de empreendimentos voltados à hospedagem em terrenos com metragem inferior a 2.000m2. Além disso, a pesquisa concluiu serem ilegais as decisões administrativas que indeferem as construções voltadas à hospedagem em imóveis com metragem inferior a 2.000m2, à medida em que ancoradas em legislação inexistente.'
        ]);

        Document::create([
            'title' => 'A influência do habitus na reprodução da estrutura escolar',
            'subtitle' => 'análise de um projeto político pedagógico',
            'filename' => Str::slug('A influência do habitus na reprodução da estrutura escolar').'.pdf',
            'publication_year' => 2023,
            'abstract' => 'Esta pesquisa tem como tema os discursos inscritos no corpo textual de um documento escolar a que possam indicar uma visão sobre a escola como uma estrutura ideológica, à luz da teoria de Pierre Bourdieu (1991, 1980, 1989, 1983, 2007). O objeto de estudo é Projeto Político Pedagógico (PPP) de uma Escola Básica Municipal de Blumenau. O objetivo geral da pesquisa é compreender a estrutura escolar a partir do Projeto Político Pedagógico dentro dos conceitos ideológicos institucionalizados no documento, tendo como aporte teórico para a análise documental a noção de habitus de Pierre Bourdieu. Os objetivos específicos consistem em analisar o documento institucional e relacioná-lo a partir do referencial teórico de Pierre Bourdieu, discorrer sobre o conceito de habitus, utilizando-o para a análise da pesquisa documental e identificar a relação do habitus contido no corpo do PPP, apontando correlações aos costumes, valores e crenças sancionados e valorizados pela escola. A pesquisa adota uma abordagem qualitativa de natureza básica, com objetivo exploratório e procedimento documental, lançando mão da análise de conteúdo para compreender os significados e interpretações dos fenômenos sociais diante do tema de estudo.'
        ]);

        Document::create([
            'title' => 'A relação entre a pandemia, o adoecimento e a precarização do trabalho docente',
            'subtitle' => null,
            'filename' => Str::slug('A relação entre a pandemia, o adoecimento e a precarização do trabalho docente').'.pdf',
            'publication_year' => 2023,
            'abstract' => 'Os processos de precarização do trabalho e adoecimento docente estão cada vez mais intensos. Neste Trabalho de Curso, temos o objetivo “Compreender como os resquícios da pandemia, a partir das condições de trabalho dos professores dos cursos de Licenciatura do IFC impactam em suas vidas, no retorno às atividades presenciais”'
        ]);
    }
}
