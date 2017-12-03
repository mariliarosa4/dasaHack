<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_982800aaa675c818b33acf466738fa710dd527f98b9c8fd8a4f49cd4648c205f extends Twig_Template
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
        $__internal_bccd6dcb0cb000a3ef43533c4769ec31f5a683e734bf3ee2f93c134b40830e5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bccd6dcb0cb000a3ef43533c4769ec31f5a683e734bf3ee2f93c134b40830e5c->enter($__internal_bccd6dcb0cb000a3ef43533c4769ec31f5a683e734bf3ee2f93c134b40830e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_aeec95e74f8ff4ec37087ca911b7cd727893b78e8da1e1fc5e56a50956b3307a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeec95e74f8ff4ec37087ca911b7cd727893b78e8da1e1fc5e56a50956b3307a->enter($__internal_aeec95e74f8ff4ec37087ca911b7cd727893b78e8da1e1fc5e56a50956b3307a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_bccd6dcb0cb000a3ef43533c4769ec31f5a683e734bf3ee2f93c134b40830e5c->leave($__internal_bccd6dcb0cb000a3ef43533c4769ec31f5a683e734bf3ee2f93c134b40830e5c_prof);

        
        $__internal_aeec95e74f8ff4ec37087ca911b7cd727893b78e8da1e1fc5e56a50956b3307a->leave($__internal_aeec95e74f8ff4ec37087ca911b7cd727893b78e8da1e1fc5e56a50956b3307a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
