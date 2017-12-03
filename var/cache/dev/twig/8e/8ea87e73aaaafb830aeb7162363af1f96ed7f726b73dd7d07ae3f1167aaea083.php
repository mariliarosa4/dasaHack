<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_bf043cdc1f86180e4b139ce9ecd758283ee7565b0ba4e5ddd009afa4c62823f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34129abdddb357fd194071d12acaeed3c346ebdd87d1e58ff2df9e233dc39f9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34129abdddb357fd194071d12acaeed3c346ebdd87d1e58ff2df9e233dc39f9f->enter($__internal_34129abdddb357fd194071d12acaeed3c346ebdd87d1e58ff2df9e233dc39f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_75635c5b59e8276760f250896e02313b40aaaaa0339249d5ed1ca653cd358b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75635c5b59e8276760f250896e02313b40aaaaa0339249d5ed1ca653cd358b20->enter($__internal_75635c5b59e8276760f250896e02313b40aaaaa0339249d5ed1ca653cd358b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_34129abdddb357fd194071d12acaeed3c346ebdd87d1e58ff2df9e233dc39f9f->leave($__internal_34129abdddb357fd194071d12acaeed3c346ebdd87d1e58ff2df9e233dc39f9f_prof);

        
        $__internal_75635c5b59e8276760f250896e02313b40aaaaa0339249d5ed1ca653cd358b20->leave($__internal_75635c5b59e8276760f250896e02313b40aaaaa0339249d5ed1ca653cd358b20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
