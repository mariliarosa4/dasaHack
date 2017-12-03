<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_111d59b413361a5c199b84ce7a2a9ccc55d09953faae1d87c5d37facc7f0537e extends Twig_Template
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
        $__internal_ed0e9c83b71caba38e5055ae682d8f5e980c292924f496c7fe078b6d5e0cc093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed0e9c83b71caba38e5055ae682d8f5e980c292924f496c7fe078b6d5e0cc093->enter($__internal_ed0e9c83b71caba38e5055ae682d8f5e980c292924f496c7fe078b6d5e0cc093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_900f598799b6e4de111370f7b7a85fe034c2e517a57e5b8436cc4bcb468a625c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_900f598799b6e4de111370f7b7a85fe034c2e517a57e5b8436cc4bcb468a625c->enter($__internal_900f598799b6e4de111370f7b7a85fe034c2e517a57e5b8436cc4bcb468a625c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ed0e9c83b71caba38e5055ae682d8f5e980c292924f496c7fe078b6d5e0cc093->leave($__internal_ed0e9c83b71caba38e5055ae682d8f5e980c292924f496c7fe078b6d5e0cc093_prof);

        
        $__internal_900f598799b6e4de111370f7b7a85fe034c2e517a57e5b8436cc4bcb468a625c->leave($__internal_900f598799b6e4de111370f7b7a85fe034c2e517a57e5b8436cc4bcb468a625c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
