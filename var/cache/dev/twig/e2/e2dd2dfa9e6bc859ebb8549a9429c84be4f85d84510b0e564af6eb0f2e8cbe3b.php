<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_f9fb4ba5cf8647b4985631d770b4d7b78bcebfd0d668622a3902f1e5263298be extends Twig_Template
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
        $__internal_2267473e0cf6481b480b5b5d25357f3ee8dba45e4728890966685682217af589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2267473e0cf6481b480b5b5d25357f3ee8dba45e4728890966685682217af589->enter($__internal_2267473e0cf6481b480b5b5d25357f3ee8dba45e4728890966685682217af589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_ffcefe602c2333c4a9f8b125829cc4acb5cf94dac05c748ad6974901122b8e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffcefe602c2333c4a9f8b125829cc4acb5cf94dac05c748ad6974901122b8e9e->enter($__internal_ffcefe602c2333c4a9f8b125829cc4acb5cf94dac05c748ad6974901122b8e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_2267473e0cf6481b480b5b5d25357f3ee8dba45e4728890966685682217af589->leave($__internal_2267473e0cf6481b480b5b5d25357f3ee8dba45e4728890966685682217af589_prof);

        
        $__internal_ffcefe602c2333c4a9f8b125829cc4acb5cf94dac05c748ad6974901122b8e9e->leave($__internal_ffcefe602c2333c4a9f8b125829cc4acb5cf94dac05c748ad6974901122b8e9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
