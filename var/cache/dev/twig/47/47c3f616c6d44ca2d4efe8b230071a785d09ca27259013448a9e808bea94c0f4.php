<?php

/* form_table_layout.html.twig */
class __TwigTemplate_456d5c2c6ebe0756a0457d9f93d7f0e6fc0108837c5eb99b36b6babbb56966ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93a29e6330a11c09b2a0e3f4d4deaaf1af02b484d06fb591d89e0776b284835c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93a29e6330a11c09b2a0e3f4d4deaaf1af02b484d06fb591d89e0776b284835c->enter($__internal_93a29e6330a11c09b2a0e3f4d4deaaf1af02b484d06fb591d89e0776b284835c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_86dc94e87f315da8b28c4f2d3bb37fb8d4518342fa2fc68ea2f2be9c08cc140b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86dc94e87f315da8b28c4f2d3bb37fb8d4518342fa2fc68ea2f2be9c08cc140b->enter($__internal_86dc94e87f315da8b28c4f2d3bb37fb8d4518342fa2fc68ea2f2be9c08cc140b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_93a29e6330a11c09b2a0e3f4d4deaaf1af02b484d06fb591d89e0776b284835c->leave($__internal_93a29e6330a11c09b2a0e3f4d4deaaf1af02b484d06fb591d89e0776b284835c_prof);

        
        $__internal_86dc94e87f315da8b28c4f2d3bb37fb8d4518342fa2fc68ea2f2be9c08cc140b->leave($__internal_86dc94e87f315da8b28c4f2d3bb37fb8d4518342fa2fc68ea2f2be9c08cc140b_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9bd0a9dc8e58852a62dc6e561ca5cf5ab82865b4a468615d8c67127a9e35fcf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bd0a9dc8e58852a62dc6e561ca5cf5ab82865b4a468615d8c67127a9e35fcf3->enter($__internal_9bd0a9dc8e58852a62dc6e561ca5cf5ab82865b4a468615d8c67127a9e35fcf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4b11eb558023d2b635c90a2b5b25e91acf5f357e08630ef6761e5de4f06c819a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b11eb558023d2b635c90a2b5b25e91acf5f357e08630ef6761e5de4f06c819a->enter($__internal_4b11eb558023d2b635c90a2b5b25e91acf5f357e08630ef6761e5de4f06c819a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_4b11eb558023d2b635c90a2b5b25e91acf5f357e08630ef6761e5de4f06c819a->leave($__internal_4b11eb558023d2b635c90a2b5b25e91acf5f357e08630ef6761e5de4f06c819a_prof);

        
        $__internal_9bd0a9dc8e58852a62dc6e561ca5cf5ab82865b4a468615d8c67127a9e35fcf3->leave($__internal_9bd0a9dc8e58852a62dc6e561ca5cf5ab82865b4a468615d8c67127a9e35fcf3_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_3bb2d40880bfebe255ba660e14c80555d9123c2399133f0e4e8bad8d6e28a14d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bb2d40880bfebe255ba660e14c80555d9123c2399133f0e4e8bad8d6e28a14d->enter($__internal_3bb2d40880bfebe255ba660e14c80555d9123c2399133f0e4e8bad8d6e28a14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_3b3b4f007afd33979e997149abce09d802a6e8ded912159def24061affd44b45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3b4f007afd33979e997149abce09d802a6e8ded912159def24061affd44b45->enter($__internal_3b3b4f007afd33979e997149abce09d802a6e8ded912159def24061affd44b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_3b3b4f007afd33979e997149abce09d802a6e8ded912159def24061affd44b45->leave($__internal_3b3b4f007afd33979e997149abce09d802a6e8ded912159def24061affd44b45_prof);

        
        $__internal_3bb2d40880bfebe255ba660e14c80555d9123c2399133f0e4e8bad8d6e28a14d->leave($__internal_3bb2d40880bfebe255ba660e14c80555d9123c2399133f0e4e8bad8d6e28a14d_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_072476ea5428a6f5575f3f60a23f74a8379b8481e34f1667aa3598242c300fef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_072476ea5428a6f5575f3f60a23f74a8379b8481e34f1667aa3598242c300fef->enter($__internal_072476ea5428a6f5575f3f60a23f74a8379b8481e34f1667aa3598242c300fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_7f5d8993cf29da2e3c94ed86b13821f248fcdbd10c871c7ed7f7c666e097f532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5d8993cf29da2e3c94ed86b13821f248fcdbd10c871c7ed7f7c666e097f532->enter($__internal_7f5d8993cf29da2e3c94ed86b13821f248fcdbd10c871c7ed7f7c666e097f532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_7f5d8993cf29da2e3c94ed86b13821f248fcdbd10c871c7ed7f7c666e097f532->leave($__internal_7f5d8993cf29da2e3c94ed86b13821f248fcdbd10c871c7ed7f7c666e097f532_prof);

        
        $__internal_072476ea5428a6f5575f3f60a23f74a8379b8481e34f1667aa3598242c300fef->leave($__internal_072476ea5428a6f5575f3f60a23f74a8379b8481e34f1667aa3598242c300fef_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_92f651975fa4f0bcd3041894075e4a02ed11fbc21f9421345b2568d8c2bd0234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92f651975fa4f0bcd3041894075e4a02ed11fbc21f9421345b2568d8c2bd0234->enter($__internal_92f651975fa4f0bcd3041894075e4a02ed11fbc21f9421345b2568d8c2bd0234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_0830bdd611d310c4e9f9a943f580dc059dd64c5c99a7875800f8ff4d4b219bbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0830bdd611d310c4e9f9a943f580dc059dd64c5c99a7875800f8ff4d4b219bbb->enter($__internal_0830bdd611d310c4e9f9a943f580dc059dd64c5c99a7875800f8ff4d4b219bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) && (twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_0830bdd611d310c4e9f9a943f580dc059dd64c5c99a7875800f8ff4d4b219bbb->leave($__internal_0830bdd611d310c4e9f9a943f580dc059dd64c5c99a7875800f8ff4d4b219bbb_prof);

        
        $__internal_92f651975fa4f0bcd3041894075e4a02ed11fbc21f9421345b2568d8c2bd0234->leave($__internal_92f651975fa4f0bcd3041894075e4a02ed11fbc21f9421345b2568d8c2bd0234_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
