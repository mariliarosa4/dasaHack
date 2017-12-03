<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_da3d9b132af2a40e907a65e172b4f955099b807077400b069492c335ce2f3d3d extends Twig_Template
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
        $__internal_e674a6e1529f00b969ef9959952030e96b0755b90b483006cd1a4740d9a7b4ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e674a6e1529f00b969ef9959952030e96b0755b90b483006cd1a4740d9a7b4ac->enter($__internal_e674a6e1529f00b969ef9959952030e96b0755b90b483006cd1a4740d9a7b4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_dcc9f40da3656eb7c3316536612a9124111a6475c7166ec636e708fd2e8dae37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc9f40da3656eb7c3316536612a9124111a6475c7166ec636e708fd2e8dae37->enter($__internal_dcc9f40da3656eb7c3316536612a9124111a6475c7166ec636e708fd2e8dae37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_e674a6e1529f00b969ef9959952030e96b0755b90b483006cd1a4740d9a7b4ac->leave($__internal_e674a6e1529f00b969ef9959952030e96b0755b90b483006cd1a4740d9a7b4ac_prof);

        
        $__internal_dcc9f40da3656eb7c3316536612a9124111a6475c7166ec636e708fd2e8dae37->leave($__internal_dcc9f40da3656eb7c3316536612a9124111a6475c7166ec636e708fd2e8dae37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
