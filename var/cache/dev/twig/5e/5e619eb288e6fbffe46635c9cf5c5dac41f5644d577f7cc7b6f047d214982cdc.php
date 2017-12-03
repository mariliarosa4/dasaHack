<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a91a3b4322fa2e54aa441d59497315d55bbdf3dda35f906aa3ab94fbb1781251 extends Twig_Template
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
        $__internal_84d7b7e9150f17d3c8acc1511601b22f13c114af6ac437751e306a04ad6be493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84d7b7e9150f17d3c8acc1511601b22f13c114af6ac437751e306a04ad6be493->enter($__internal_84d7b7e9150f17d3c8acc1511601b22f13c114af6ac437751e306a04ad6be493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_321d8fd55f85eed961b025f9f0422aadae91c63c5bd6ee383094e7e11530e9ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_321d8fd55f85eed961b025f9f0422aadae91c63c5bd6ee383094e7e11530e9ff->enter($__internal_321d8fd55f85eed961b025f9f0422aadae91c63c5bd6ee383094e7e11530e9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_84d7b7e9150f17d3c8acc1511601b22f13c114af6ac437751e306a04ad6be493->leave($__internal_84d7b7e9150f17d3c8acc1511601b22f13c114af6ac437751e306a04ad6be493_prof);

        
        $__internal_321d8fd55f85eed961b025f9f0422aadae91c63c5bd6ee383094e7e11530e9ff->leave($__internal_321d8fd55f85eed961b025f9f0422aadae91c63c5bd6ee383094e7e11530e9ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
