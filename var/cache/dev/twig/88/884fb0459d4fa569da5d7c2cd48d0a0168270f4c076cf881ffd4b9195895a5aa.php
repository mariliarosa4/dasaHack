<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c02706646be8830cee863351d5254b7b2c6abdc404e878e9f3360bec0b7bc527 extends Twig_Template
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
        $__internal_287fc3c4a0e544ca1c15b0d13ac223e1b5855e10c1e83d570db183a48af3564f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_287fc3c4a0e544ca1c15b0d13ac223e1b5855e10c1e83d570db183a48af3564f->enter($__internal_287fc3c4a0e544ca1c15b0d13ac223e1b5855e10c1e83d570db183a48af3564f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_1037a941aba6325710b1749ea0641b8c7c6eb4a5c7c30b91dcb54e24dc8ec405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1037a941aba6325710b1749ea0641b8c7c6eb4a5c7c30b91dcb54e24dc8ec405->enter($__internal_1037a941aba6325710b1749ea0641b8c7c6eb4a5c7c30b91dcb54e24dc8ec405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_287fc3c4a0e544ca1c15b0d13ac223e1b5855e10c1e83d570db183a48af3564f->leave($__internal_287fc3c4a0e544ca1c15b0d13ac223e1b5855e10c1e83d570db183a48af3564f_prof);

        
        $__internal_1037a941aba6325710b1749ea0641b8c7c6eb4a5c7c30b91dcb54e24dc8ec405->leave($__internal_1037a941aba6325710b1749ea0641b8c7c6eb4a5c7c30b91dcb54e24dc8ec405_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
