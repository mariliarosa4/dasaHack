<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_fb2104fa7e1229b433c113d994690d41bc7694aa76337c640acd788d9ba1beac extends Twig_Template
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
        $__internal_8e94f4da7daea0ac4139bc554451e8df4384d3e13f88c1978bcf52a3471e20f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e94f4da7daea0ac4139bc554451e8df4384d3e13f88c1978bcf52a3471e20f1->enter($__internal_8e94f4da7daea0ac4139bc554451e8df4384d3e13f88c1978bcf52a3471e20f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_a2e8fe24d5b20ac753b5118d39465c82af246712f9eefe5ef7a6fe22e54eea3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2e8fe24d5b20ac753b5118d39465c82af246712f9eefe5ef7a6fe22e54eea3c->enter($__internal_a2e8fe24d5b20ac753b5118d39465c82af246712f9eefe5ef7a6fe22e54eea3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_8e94f4da7daea0ac4139bc554451e8df4384d3e13f88c1978bcf52a3471e20f1->leave($__internal_8e94f4da7daea0ac4139bc554451e8df4384d3e13f88c1978bcf52a3471e20f1_prof);

        
        $__internal_a2e8fe24d5b20ac753b5118d39465c82af246712f9eefe5ef7a6fe22e54eea3c->leave($__internal_a2e8fe24d5b20ac753b5118d39465c82af246712f9eefe5ef7a6fe22e54eea3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
