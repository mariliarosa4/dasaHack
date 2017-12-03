<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_673fe3ba4983d51b7cae290d66088054512e0b920257a64bcbcaf7564562a928 extends Twig_Template
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
        $__internal_42c54f1b63f8bbfe804954874f49db36dc82c702f820a47f7d6e07fe952dfcd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42c54f1b63f8bbfe804954874f49db36dc82c702f820a47f7d6e07fe952dfcd3->enter($__internal_42c54f1b63f8bbfe804954874f49db36dc82c702f820a47f7d6e07fe952dfcd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_89317533f94af783c3b587fea99f5bd07d4f905c21e1260bd1d79b6d3ae64bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89317533f94af783c3b587fea99f5bd07d4f905c21e1260bd1d79b6d3ae64bce->enter($__internal_89317533f94af783c3b587fea99f5bd07d4f905c21e1260bd1d79b6d3ae64bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_42c54f1b63f8bbfe804954874f49db36dc82c702f820a47f7d6e07fe952dfcd3->leave($__internal_42c54f1b63f8bbfe804954874f49db36dc82c702f820a47f7d6e07fe952dfcd3_prof);

        
        $__internal_89317533f94af783c3b587fea99f5bd07d4f905c21e1260bd1d79b6d3ae64bce->leave($__internal_89317533f94af783c3b587fea99f5bd07d4f905c21e1260bd1d79b6d3ae64bce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
