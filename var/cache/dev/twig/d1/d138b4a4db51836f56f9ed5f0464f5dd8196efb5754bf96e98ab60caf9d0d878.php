<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b094c28242c8a6aa22c240152eb1e54c1585c524dc3ec0bac29435664712c317 extends Twig_Template
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
        $__internal_4a1cd9e6a7b01c53ef02da758809b5dfc7fbf5c9f54415a68f7279256654ee0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a1cd9e6a7b01c53ef02da758809b5dfc7fbf5c9f54415a68f7279256654ee0b->enter($__internal_4a1cd9e6a7b01c53ef02da758809b5dfc7fbf5c9f54415a68f7279256654ee0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_b02854874571c9c1381c1fc7abf6119b432994e2902a5436d27aa75a9acd4ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02854874571c9c1381c1fc7abf6119b432994e2902a5436d27aa75a9acd4ae2->enter($__internal_b02854874571c9c1381c1fc7abf6119b432994e2902a5436d27aa75a9acd4ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_4a1cd9e6a7b01c53ef02da758809b5dfc7fbf5c9f54415a68f7279256654ee0b->leave($__internal_4a1cd9e6a7b01c53ef02da758809b5dfc7fbf5c9f54415a68f7279256654ee0b_prof);

        
        $__internal_b02854874571c9c1381c1fc7abf6119b432994e2902a5436d27aa75a9acd4ae2->leave($__internal_b02854874571c9c1381c1fc7abf6119b432994e2902a5436d27aa75a9acd4ae2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
