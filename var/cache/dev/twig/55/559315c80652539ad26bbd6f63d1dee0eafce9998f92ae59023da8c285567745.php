<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_ec4593bfa186f1b70277da279fdda44bdd8cb917c21e7dd4151f9c252561a1a2 extends Twig_Template
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
        $__internal_d59392c3f1f522df6f7d0814ece88de8fb7783177193e79d5bbbdcde85554cd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d59392c3f1f522df6f7d0814ece88de8fb7783177193e79d5bbbdcde85554cd2->enter($__internal_d59392c3f1f522df6f7d0814ece88de8fb7783177193e79d5bbbdcde85554cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_e93754e5eaaf84e0cc5d855e4bc9e07334f943746535af156742bd7dbadb84d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e93754e5eaaf84e0cc5d855e4bc9e07334f943746535af156742bd7dbadb84d7->enter($__internal_e93754e5eaaf84e0cc5d855e4bc9e07334f943746535af156742bd7dbadb84d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_d59392c3f1f522df6f7d0814ece88de8fb7783177193e79d5bbbdcde85554cd2->leave($__internal_d59392c3f1f522df6f7d0814ece88de8fb7783177193e79d5bbbdcde85554cd2_prof);

        
        $__internal_e93754e5eaaf84e0cc5d855e4bc9e07334f943746535af156742bd7dbadb84d7->leave($__internal_e93754e5eaaf84e0cc5d855e4bc9e07334f943746535af156742bd7dbadb84d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
