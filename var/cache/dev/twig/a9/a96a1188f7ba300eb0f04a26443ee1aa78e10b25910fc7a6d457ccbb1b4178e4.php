<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7f8854cd010339daaa43e28044d34c6c45501535d47a9b6200e41bb423057965 extends Twig_Template
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
        $__internal_52fdef4280c9ca6371e4fba1248f962068b9c25a92163b9d72620c6730e89a55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52fdef4280c9ca6371e4fba1248f962068b9c25a92163b9d72620c6730e89a55->enter($__internal_52fdef4280c9ca6371e4fba1248f962068b9c25a92163b9d72620c6730e89a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_d05c4fcec0ef00a3e3df81fdf28e74867654369d5a6433fde5fa6b658ee3d3bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d05c4fcec0ef00a3e3df81fdf28e74867654369d5a6433fde5fa6b658ee3d3bb->enter($__internal_d05c4fcec0ef00a3e3df81fdf28e74867654369d5a6433fde5fa6b658ee3d3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_52fdef4280c9ca6371e4fba1248f962068b9c25a92163b9d72620c6730e89a55->leave($__internal_52fdef4280c9ca6371e4fba1248f962068b9c25a92163b9d72620c6730e89a55_prof);

        
        $__internal_d05c4fcec0ef00a3e3df81fdf28e74867654369d5a6433fde5fa6b658ee3d3bb->leave($__internal_d05c4fcec0ef00a3e3df81fdf28e74867654369d5a6433fde5fa6b658ee3d3bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
