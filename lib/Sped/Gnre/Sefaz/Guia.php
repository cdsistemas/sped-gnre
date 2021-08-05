<?php

/**
 * Este arquivo é parte do programa GNRE PHP
 * GNRE PHP é um software livre; você pode redistribuí-lo e/ou
 * modificá-lo dentro dos termos da Licença Pública Geral GNU como
 * publicada pela Fundação do Software Livre (FSF); na versão 2 da
 * Licença, ou (na sua opinião) qualquer versão.
 * Este programa é distribuído na esperança de que possa ser  útil,
 * mas SEM NENHUMA GARANTIA; sem uma garantia implícita de ADEQUAÇÃO a qualquer
 * MERCADO ou APLICAÇÃO EM PARTICULAR. Veja a
 * Licença Pública Geral GNU para maiores detalhes.
 * Você deve ter recebido uma cópia da Licença Pública Geral GNU
 * junto com este programa, se não, escreva para a Fundação do Software
 * Livre(FSF) Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

namespace Sped\Gnre\Sefaz;

use Sped\Gnre\Exception\UndefinedProperty;

/**
 * Classe responsável por criar uma simples guia GNRE. Essa classe
 * armazena todos os atributos necessários para serem transformados no
 * XML aceito pela SEFAZ e posteriormente submetidos através do webservice
 *
 * <b>
 * Os atributos com o prefixo "retorno" sao populados com os dados do retorno
 * do web service da SEFAZ, alguns deles podem ou nao possuir conteudo.
 * </b>
 * @package     gnre
 * @subpackage  sefaz
 * @author      Matheus Marabesi <matheus.marabesi@gmail.com>
 * @license     http://www.gnu.org/licenses/gpl-howto.html GPL
 * @version     1.0.0
 */
class Guia
{

    /**
     * Uma sigla representando um dos 27 estados brasileiros
     * por exemplo AC, BA, DF
     * @var    string
     */
    private $c01_UfFavorecida;

    /**
     * @return string
     */
    public function getC01UfFavorecida()
    {
        return $this->c01_UfFavorecida;
    }

    /**
     * @param string $c01_UfFavorecida
     */
    public function setC01UfFavorecida($c01_UfFavorecida)
    {
        $this->c01_UfFavorecida = $c01_UfFavorecida;
    }

    /**
     * @return int
     */
    public function getC02Receita()
    {
        return $this->c02_receita;
    }

    /**
     * @param int $c02_receita
     */
    public function setC02Receita($c02_receita)
    {
        $this->c02_receita = $c02_receita;
    }

    /**
     * @return int
     */
    public function getC25DetalhamentoReceita()
    {
        return $this->c25_detalhamentoReceita;
    }

    /**
     * @param int $c25_detalhamentoReceita
     */
    public function setC25DetalhamentoReceita($c25_detalhamentoReceita)
    {
        $this->c25_detalhamentoReceita = $c25_detalhamentoReceita;
    }

    /**
     * @return int
     */
    public function getC26Produto()
    {
        return $this->c26_produto;
    }

    /**
     * @param int $c26_produto
     */
    public function setC26Produto($c26_produto)
    {
        $this->c26_produto = $c26_produto;
    }

    /**
     * @return int
     */
    public function getC27TipoIdentificacaoEmitente()
    {
        return $this->c27_tipoIdentificacaoEmitente;
    }

    /**
     * @param int $c27_tipoIdentificacaoEmitente
     */
    public function setC27TipoIdentificacaoEmitente($c27_tipoIdentificacaoEmitente)
    {
        $this->c27_tipoIdentificacaoEmitente = $c27_tipoIdentificacaoEmitente;
    }

    /**
     * @return int
     */
    public function getC03IdContribuinteEmitente()
    {
        return $this->c03_idContribuinteEmitente;
    }

    /**
     * @param int $c03_idContribuinteEmitente
     */
    public function setC03IdContribuinteEmitente($c03_idContribuinteEmitente)
    {
        $this->c03_idContribuinteEmitente = $c03_idContribuinteEmitente;
    }

    /**
     * @return int
     */
    public function getC28TipoDocOrigem()
    {
        return $this->c28_tipoDocOrigem;
    }

    /**
     * @param int $c28_tipoDocOrigem
     */
    public function setC28TipoDocOrigem($c28_tipoDocOrigem)
    {
        $this->c28_tipoDocOrigem = $c28_tipoDocOrigem;
    }

    /**
     * @return int
     */
    public function getC04DocOrigem()
    {
        return $this->c04_docOrigem;
    }

    /**
     * @param int $c04_docOrigem
     */
    public function setC04DocOrigem($c04_docOrigem)
    {
        $this->c04_docOrigem = $c04_docOrigem;
    }

    /**
     * @return float
     */
    public function getC06ValorPrincipal()
    {
        return $this->c06_valorPrincipal;
    }

    /**
     * @param float $c06_valorPrincipal
     */
    public function setC06ValorPrincipal($c06_valorPrincipal)
    {
        $this->c06_valorPrincipal = $c06_valorPrincipal;
    }

    /**
     * @return float
     */
    public function getC10ValorTotal()
    {
        return $this->c10_valorTotal;
    }

    /**
     * @param float $c10_valorTotal
     */
    public function setC10ValorTotal($c10_valorTotal)
    {
        $this->c10_valorTotal = $c10_valorTotal;
    }

    /**
     * @return string
     */
    public function getC14DataVencimento()
    {
        return $this->c14_dataVencimento;
    }

    /**
     * @param string $c14_dataVencimento
     */
    public function setC14DataVencimento($c14_dataVencimento)
    {
        $this->c14_dataVencimento = $c14_dataVencimento;
    }

    /**
     * @return int
     */
    public function getC15Convenio()
    {
        return $this->c15_convenio;
    }

    /**
     * @param int $c15_convenio
     */
    public function setC15Convenio($c15_convenio)
    {
        $this->c15_convenio = $c15_convenio;
    }

    /**
     * @return int
     */
    public function getC16RazaoSocialEmitente()
    {
        return $this->c16_razaoSocialEmitente;
    }

    /**
     * @param int $c16_razaoSocialEmitente
     */
    public function setC16RazaoSocialEmitente($c16_razaoSocialEmitente)
    {
        $this->c16_razaoSocialEmitente = $c16_razaoSocialEmitente;
    }

    /**
     * @return int
     */
    public function getC17InscricaoEstadualEmitente()
    {
        return $this->c17_inscricaoEstadualEmitente;
    }

    /**
     * @param int $c17_inscricaoEstadualEmitente
     */
    public function setC17InscricaoEstadualEmitente($c17_inscricaoEstadualEmitente)
    {
        $this->c17_inscricaoEstadualEmitente = $c17_inscricaoEstadualEmitente;
    }

    /**
     * @return int
     */
    public function getC18EnderecoEmitente()
    {
        return $this->c18_enderecoEmitente;
    }

    /**
     * @param int $c18_enderecoEmitente
     */
    public function setC18EnderecoEmitente($c18_enderecoEmitente)
    {
        $this->c18_enderecoEmitente = $c18_enderecoEmitente;
    }

    /**
     * @return int
     */
    public function getC19MunicipioEmitente()
    {
        return $this->c19_municipioEmitente;
    }

    /**
     * @param int $c19_municipioEmitente
     */
    public function setC19MunicipioEmitente($c19_municipioEmitente)
    {
        $this->c19_municipioEmitente = $c19_municipioEmitente;
    }

    /**
     * @return string
     */
    public function getC20UfEnderecoEmitente()
    {
        return $this->c20_ufEnderecoEmitente;
    }

    /**
     * @param string $c20_ufEnderecoEmitente
     */
    public function setC20UfEnderecoEmitente($c20_ufEnderecoEmitente)
    {
        $this->c20_ufEnderecoEmitente = $c20_ufEnderecoEmitente;
    }

    /**
     * @return int
     */
    public function getC21CepEmitente()
    {
        return $this->c21_cepEmitente;
    }

    /**
     * @param int $c21_cepEmitente
     */
    public function setC21CepEmitente($c21_cepEmitente)
    {
        $this->c21_cepEmitente = $c21_cepEmitente;
    }

    /**
     * @return int
     */
    public function getC22TelefoneEmitente()
    {
        return $this->c22_telefoneEmitente;
    }

    /**
     * @param int $c22_telefoneEmitente
     */
    public function setC22TelefoneEmitente($c22_telefoneEmitente)
    {
        $this->c22_telefoneEmitente = $c22_telefoneEmitente;
    }

    /**
     * @return int
     */
    public function getC34TipoIdentificacaoDestinatario()
    {
        return $this->c34_tipoIdentificacaoDestinatario;
    }

    /**
     * @param int $c34_tipoIdentificacaoDestinatario
     */
    public function setC34TipoIdentificacaoDestinatario($c34_tipoIdentificacaoDestinatario)
    {
        $this->c34_tipoIdentificacaoDestinatario = $c34_tipoIdentificacaoDestinatario;
    }

    /**
     * @return int
     */
    public function getC35IdContribuinteDestinatario()
    {
        return $this->c35_idContribuinteDestinatario;
    }

    /**
     * @param int $c35_idContribuinteDestinatario
     */
    public function setC35IdContribuinteDestinatario($c35_idContribuinteDestinatario)
    {
        $this->c35_idContribuinteDestinatario = $c35_idContribuinteDestinatario;
    }

    /**
     * @return int
     */
    public function getC36InscricaoEstadualDestinatario()
    {
        return $this->c36_inscricaoEstadualDestinatario;
    }

    /**
     * @param int $c36_inscricaoEstadualDestinatario
     */
    public function setC36InscricaoEstadualDestinatario($c36_inscricaoEstadualDestinatario)
    {
        $this->c36_inscricaoEstadualDestinatario = $c36_inscricaoEstadualDestinatario;
    }

    /**
     * @return int
     */
    public function getC37RazaoSocialDestinatario()
    {
        return $this->c37_razaoSocialDestinatario;
    }

    /**
     * @param int $c37_razaoSocialDestinatario
     */
    public function setC37RazaoSocialDestinatario($c37_razaoSocialDestinatario)
    {
        $this->c37_razaoSocialDestinatario = $c37_razaoSocialDestinatario;
    }

    /**
     * @return int
     */
    public function getC38MunicipioDestinatario()
    {
        return $this->c38_municipioDestinatario;
    }

    /**
     * @param int $c38_municipioDestinatario
     */
    public function setC38MunicipioDestinatario($c38_municipioDestinatario)
    {
        $this->c38_municipioDestinatario = $c38_municipioDestinatario;
    }

    /**
     * @return string
     */
    public function getC33DataPagamento()
    {
        return $this->c33_dataPagamento;
    }

    /**
     * @param string $c33_dataPagamento
     */
    public function setC33DataPagamento($c33_dataPagamento)
    {
        $this->c33_dataPagamento = $c33_dataPagamento;
    }

    /**
     * @return int
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * @param int $periodo
     */
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;
    }

    /**
     * @return int
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * @param int $mes
     */
    public function setMes($mes)
    {
        $this->mes = $mes;
    }

    /**
     * @return int
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * @param int $ano
     */
    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    /**
     * @return int
     */
    public function getParcela()
    {
        return $this->parcela;
    }

    /**
     * @param int $parcela
     */
    public function setParcela($parcela)
    {
        $this->parcela = $parcela;
    }

    /**
     * @return array
     */
    public function getC39CamposExtras()
    {
        return $this->c39_camposExtras;
    }

    /**
     * @param array $c39_camposExtras
     */
    public function setC39CamposExtras($c39_camposExtras)
    {
        $this->c39_camposExtras = $c39_camposExtras;
    }

    /**
     * @return string
     */
    public function getC42IdentificadorGuia()
    {
        return $this->c42_identificadorGuia;
    }

    /**
     * @param string $c42_identificadorGuia
     */
    public function setC42IdentificadorGuia($c42_identificadorGuia)
    {
        $this->c42_identificadorGuia = $c42_identificadorGuia;
    }

    /**
     * @return string
     */
    public function getRetornoInformacoesComplementares()
    {
        return $this->retornoInformacoesComplementares;
    }

    /**
     * @param string $retornoInformacoesComplementares
     */
    public function setRetornoInformacoesComplementares($retornoInformacoesComplementares)
    {
        $this->retornoInformacoesComplementares = $retornoInformacoesComplementares;
    }

    /**
     * @return float
     */
    public function getRetornoAtualizacaoMonetaria()
    {
        return $this->retornoAtualizacaoMonetaria;
    }

    /**
     * @param float $retornoAtualizacaoMonetaria
     */
    public function setRetornoAtualizacaoMonetaria($retornoAtualizacaoMonetaria)
    {
        $this->retornoAtualizacaoMonetaria = $retornoAtualizacaoMonetaria;
    }

    /**
     * @return float
     */
    public function getRetornoJuros()
    {
        return $this->retornoJuros;
    }

    /**
     * @param float $retornoJuros
     */
    public function setRetornoJuros($retornoJuros)
    {
        $this->retornoJuros = $retornoJuros;
    }

    /**
     * @return float
     */
    public function getRetornoMulta()
    {
        return $this->retornoMulta;
    }

    /**
     * @param float $retornoMulta
     */
    public function setRetornoMulta($retornoMulta)
    {
        $this->retornoMulta = $retornoMulta;
    }

    /**
     * @return int
     */
    public function getRetornoRepresentacaoNumerica()
    {
        return $this->retornoRepresentacaoNumerica;
    }

    /**
     * @param int $retornoRepresentacaoNumerica
     */
    public function setRetornoRepresentacaoNumerica($retornoRepresentacaoNumerica)
    {
        $this->retornoRepresentacaoNumerica = $retornoRepresentacaoNumerica;
    }

    /**
     * @return int
     */
    public function getRetornoCodigoDeBarras()
    {
        return $this->retornoCodigoDeBarras;
    }

    /**
     * @param int $retornoCodigoDeBarras
     */
    public function setRetornoCodigoDeBarras($retornoCodigoDeBarras)
    {
        $this->retornoCodigoDeBarras = $retornoCodigoDeBarras;
    }

    /**
     * @return int
     */
    public function getRetornoSituacaoGuia()
    {
        return $this->retornoSituacaoGuia;
    }

    /**
     * @param int $retornoSituacaoGuia
     */
    public function setRetornoSituacaoGuia($retornoSituacaoGuia)
    {
        $this->retornoSituacaoGuia = $retornoSituacaoGuia;
    }

    /**
     * @return type
     */
    public function getRetornoSequencialGuia()
    {
        return $this->retornoSequencialGuia;
    }

    /**
     * @param type $retornoSequencialGuia
     */
    public function setRetornoSequencialGuia($retornoSequencialGuia)
    {
        $this->retornoSequencialGuia = $retornoSequencialGuia;
    }

    /**
     * @return string
     */
    public function getRetornoErrosDeValidacaoCampo()
    {
        return $this->retornoErrosDeValidacaoCampo;
    }

    /**
     * @param string $retornoErrosDeValidacaoCampo
     */
    public function setRetornoErrosDeValidacaoCampo($retornoErrosDeValidacaoCampo)
    {
        $this->retornoErrosDeValidacaoCampo = $retornoErrosDeValidacaoCampo;
    }

    /**
     * @return string
     */
    public function getRetornoErrosDeValidacaoCodigo()
    {
        return $this->retornoErrosDeValidacaoCodigo;
    }

    /**
     * @param string $retornoErrosDeValidacaoCodigo
     */
    public function setRetornoErrosDeValidacaoCodigo($retornoErrosDeValidacaoCodigo)
    {
        $this->retornoErrosDeValidacaoCodigo = $retornoErrosDeValidacaoCodigo;
    }

    /**
     * @return string
     */
    public function getRetornoErrosDeValidacaoDescricao()
    {
        return $this->retornoErrosDeValidacaoDescricao;
    }

    /**
     * @param string $retornoErrosDeValidacaoDescricao
     */
    public function setRetornoErrosDeValidacaoDescricao($retornoErrosDeValidacaoDescricao)
    {
        $this->retornoErrosDeValidacaoDescricao = $retornoErrosDeValidacaoDescricao;
    }

    /**
     * @return int
     */
    public function getRetornoNumeroDeControle()
    {
        return $this->retornoNumeroDeControle;
    }

    /**
     * @param int $retornoNumeroDeControle
     */
    public function setRetornoNumeroDeControle($retornoNumeroDeControle)
    {
        $this->retornoNumeroDeControle = $retornoNumeroDeControle;
    }

    /**
     * Para esse atributo é esperado um dado do tipo inteiro
     * para maiores informações visualizar a documentação oficial do GNRE
     * http://www.gnre.pe.gov.br/gnre/index.html
     * @var    int
     */
    private $c02_receita;

    /**
     * Para esse atributo é esperado um dado do tipo inteiro
     * para maiores informações visualizar a documentação oficial do GNRE
     * http://www.gnre.pe.gov.br/gnre/index.html
     * @var    int
     */
    private $c25_detalhamentoReceita;

    /**
     * Para esse atributo é esperado um dado do tipo inteiro
     * para maiores informações visualizar a documentação oficial do GNRE
     * http://www.gnre.pe.gov.br/gnre/index.html
     * @var    int
     */
    private $c26_produto;

    /**
     * Para esse atributo é esperado um dado do tipo inteiro
     * para maiores informações visualizar a documentação oficial do GNRE
     * http://www.gnre.pe.gov.br/gnre/index.html
     * @var    int
     */
    private $c27_tipoIdentificacaoEmitente;

    /**
     * Informar o CPF ou CNPJ sem nenhuma formatação
     * apenas os dígitos
     * @var    int
     */
    private $c03_idContribuinteEmitente;

    /**
     * Para esse atributo é esperado um dado do tipo inteiro
     * para maiores informações visualizar a documentação oficial do GNRE
     * http://www.gnre.pe.gov.br/gnre/index.html
     * @var    int
     */
    private $c28_tipoDocOrigem;

    /**
     * Para esse atributo é esperado um dado do tipo inteiro
     * para maiores informações visualizar a documentação oficial do GNRE
     * http://www.gnre.pe.gov.br/gnre/index.html
     * @var    int
     */
    private $c04_docOrigem;

    /**
     * Para esse atributo é esperado um dado do tipo double com
     * o valor total da guia sem juros e/ou acréscimos
     * @var    double
     */
    private $c06_valorPrincipal;

    /**
     * Para esse atributo é esperado um dado do tipo double com
     * o valor total da guia porém com o juros e/ou acréscimo já
     * somados ao valor principal. Ou seja se o valor total for 5.00 e o juros
     * por exemplo for 5.00 o valor total será 10.00
     * @var    double
     */
    private $c10_valorTotal;

    /**
     * Para esse atributo é esperado um dado do tipo string com
     * a data de vencimento da guia no formato AAAA-MM-DD
     * @var    string
     */
    private $c14_dataVencimento;

    /**
     * Para esse atributo é esperado um dado do tipo inteiro
     * para maiores informações visualizar a documentação oficial do GNRE
     * http://www.gnre.pe.gov.br/gnre/index.html
     * @var    int
     */
    private $c15_convenio;

    /**
     * Para esse atributo é esperado um dado do tipo string com
     * a razão social da empresa emitente
     * @var    int
     */
    private $c16_razaoSocialEmitente;

    /**
     * Para esse atributo é esperado um dado do tipo int com
     * a inscrição estadual (I.E) da empresa emitente
     * @var    int
     */
    private $c17_inscricaoEstadualEmitente;

    /**
     * Para esse atributo é esperado um dado do tipo string com
     * o endereço  da empresa emitente
     * @var    int
     */
    private $c18_enderecoEmitente;

    /**
     * Para esse atributo é esperado um dado do tipo inteiro
     * com o código do municipio de acordo com a tabela do IBGE removendo os 2
     * primeiros digitos
     * @var    int
     */
    private $c19_municipioEmitente;

    /**
     * Para esse atributo é esperado um dado do tipo string
     * com a singla do estado da empresa emitente por exemplo SP, TO, AC
     * @var    string
     */
    private $c20_ufEnderecoEmitente;

    /**
     * Para esse atributo é esperado um dado do tipo int
     * com o CEP correspondente da empresa emitente
     * @var    int
     */
    private $c21_cepEmitente;

    /**
     * Para esse atributo é esperado um dado do tipo int
     * com o telefone do emitente no formato DD99999999
     * @var    int
     */
    private $c22_telefoneEmitente;

    /**
     * Para esse atributo é esperado um dado do tipo inteiro
     * para maiores informações visualizar a documentação oficial do GNRE
     * http://www.gnre.pe.gov.br/gnre/index.html
     * @var    int
     */
    private $c34_tipoIdentificacaoDestinatario;

    /**
     * Informar o CPF ou CNPJ sem nenhuma formatação
     * apenas os dígitos
     * @var    int
     */
    private $c35_idContribuinteDestinatario;

    /**
     * Para esse atributo é esperado um dado do tipo int com
     * a inscrição estadual (I.E) da empresa a quem se destina a guia
     * @var    int
     */
    private $c36_inscricaoEstadualDestinatario;

    /**
     * Para esse atributo é esperado um dado do tipo string com
     * a razão social da empresa a quem se destina a guia
     * @var    int
     */
    private $c37_razaoSocialDestinatario;

    /**
     * Para esse atributo é esperado um dado do tipo inteiro
     * com o código do municipio de acordo com a tabela do IBGE removendo os 2
     * primeiros digitos
     * @var    int
     */
    private $c38_municipioDestinatario;

    /**
     * Para esse atributo é esperado um dado do tipo string com
     * a data de pagamento da guia no formato AAAA-MM-DD
     * @var    string
     */
    private $c33_dataPagamento;

    /**
     * Para esse atributo é esperado um dado do tipo int
     * com o intervalo entre 0 e 5 (1, 2, 3, 4 ou 5)
     * @var    int
     */
    private $periodo;

    /**
     * Para esse atributo é esperado um dado do tipo int
     * com algum mês do ano (IMPORTANTE : é necessário informar o zero a esquerma caso o mês
     * desejado esteja entre 1 e 9)
     * @var    int
     */
    private $mes;

    /**
     * Para esse atributo é esperado um dado do tipo int com
     * algum ano válido como por exemplo 2014 (IMPORTANTE: o ano dever ser menor ou igual a 2000)
     * @var    int
     */
    private $ano;

    /**
     * Para esse atributo é esperado um dado do tipo int com
     * o número de parcelas desejadas entre 1 e 999 ( 1, 2, 3, 4 ... 999)
     * @var    int
     */
    private $parcela;

    /**
     * Para esse atributo é esperado um dado do tipo array
     * contendo os campos extras para a guia com os seguintes índices :
     * codigo, tipo e valor
     * @var    array
     */
    private $c39_camposExtras;

    /**
     * Para esse atributo é esperado um dado do tipo string
     * para maiores informações visualizar a documentação oficial do GNRE
     * http://www.gnre.pe.gov.br/gnre/index.html
     * @var    string
     */
    private $c42_identificadorGuia;

    /**
     * Dados retornados pelo web service da SEFAZ
     * com os dados complementares da guia
     * @var string
     */
    private $retornoInformacoesComplementares;

    /**
     * Dados retornados pelo web service da SEFAZ
     * com o valor da atualização monetária, esse item pode
     * ser encontrado do lado direito da guia em
     * https://github.com/marabesi/gnrephp/blob/dev-pdf/exemplos/guia.jpg
     * na sétima linha
     * @var double
     */
    private $retornoAtualizacaoMonetaria;

    /**
     * Dados retornados pelo web service da SEFAZ
     * com o valor do juros, esse item pode ser encontrado do lado
     * direito da guia em
     * https://github.com/marabesi/gnrephp/blob/dev-pdf/exemplos/guia.jpg
     * na oitava linha
     * @var double
     */
    private $retornoJuros;

    /**
     * Dados retornados pelo web service da SEFAZ
     * com o valor da multa, esse item pode ser encontrado do lado
     * direito da guia em
     * https://github.com/marabesi/gnrephp/blob/dev-pdf/exemplos/guia.jpg
     * na nona linha
     * @var double
     */
    private $retornoMulta;

    /**
     * Dados retornados pelo web service da SEFAZ com a linha
     * digitável do código de barras possuindo 48 caracteres
     * @var int
     */
    private $retornoRepresentacaoNumerica;

    /**
     * Dados retornados pelo web service da SEFAZ com o código
     * de barras, possuindo 44 caracteres (esse valor deve ser usado
     * para gerar a imagem do  código de barras do boleto).
     * @var int
     */
    private $retornoCodigoDeBarras;

    /**
     * Dados retornados pelo web service da SEFAZ com a situação
     * da guia, se foi processada com sucesso ou se houve erro.
     * Para maiores informações sobre esse item consulte
     * a documentação de retorno em http://www.gnre.pe.gov.br/gnre/portal/downloads.jsp
     * @var int
     */
    private $retornoSituacaoGuia;

    /**
     * Dados retornados pelo web service da SEFAZ com o numero de sequencia
     * que a guia tem na SEFAZ.
     * Para maiores informações sobre esse item consulte
     * a documentação de retorno em http://www.gnre.pe.gov.br/gnre/portal/downloads.jsp
     * @var type
     */
    private $retornoSequencialGuia;

    /**
     * Dados retornados pelo web service da SEFAZ com o nome dos campos do XML
     * que causaram o erro caso a guia não tenha sido processada com sucesso
     * @var string
     */
    private $retornoErrosDeValidacaoCampo;

    /**
     * Dados retornados pelo web service da SEFAZ com o código
     * do erro caso a guia não tenha sido processada com sucesso
     * @var string
     */
    private $retornoErrosDeValidacaoCodigo;

    /**
     * Dados retornados pelo web service da SEFAZ com a descrição
     * do erro caso a guia não tenha sido processada com sucesso
     * @var string
     */
    private $retornoErrosDeValidacaoDescricao;

    /**
     * Dados retornados pelo web service da SEFAZ com o número
     * de controle da guia, <b>o valor desse atributo é gerado pela SEFAZ</b>
     * @var int
     */
    private $retornoNumeroDeControle;

    /**
     * Método mágico utilizado para retornar um valor de um
     * determinado atributo na classe
     * @param  string  $property  Uma propriedade válida dessa classe
     * @throws UndefinedProperty  Caso a propriedade desejada não exista
     * @return string  Caso a propriedade exista retorna o seu valor
     * @since  1.0.0
     */
    public function __get($property)
    {
        if ($this->verifyProperty($property)) {
            return $this->$property;
        }
    }

    /**
     * Método mágico utilizado para setar valores aos atributos
     * existentes na classe
     * @param  string $property  O nome existente de um atributo existente na classe
     * @param  mixed  $value  O valor desejado para ser setado no atributo desejado
     * @throws UndefinedProperty  Caso o atributo desejada não exista
     * @return boolean Retorna true caso seja setado o valor para o atributo desejado
     * @since  1.0.0
     */
    public function __set($property, $value)
    {
        if ($this->verifyProperty($property)) {
            $this->$property = $value;
            return true;
        }
    }

    /**
     * Método utilizado para verificar se o atributo desejado
     * exista na classe
     * @param  string $property  O nome existente de um atributo existente na classe
     * @return boolean  Retorna true caso o atributo desejado exista na classe
     * @throws UndefinedProperty  Caso o atributo desejada não exista na classe
     * @since  1.0.0
     */
    private function verifyProperty($property)
    {
        if (!property_exists($this, $property)) {
            throw new UndefinedProperty($property);
        }

        return true;
    }
}
