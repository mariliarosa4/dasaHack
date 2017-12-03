<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_3a9a12d857df3b5e5e76c0dd267d375522e18e1c0c37b8efada538f7708e989a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2d02dbad8776ac63bdea601e0a6762c38058359953436a32322e3694930e3b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2d02dbad8776ac63bdea601e0a6762c38058359953436a32322e3694930e3b6->enter($__internal_d2d02dbad8776ac63bdea601e0a6762c38058359953436a32322e3694930e3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_695a079ee56cc7391b238b7c75366cac3515c090f1c10ff3915b9fdd1dbec4d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_695a079ee56cc7391b238b7c75366cac3515c090f1c10ff3915b9fdd1dbec4d0->enter($__internal_695a079ee56cc7391b238b7c75366cac3515c090f1c10ff3915b9fdd1dbec4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_d2d02dbad8776ac63bdea601e0a6762c38058359953436a32322e3694930e3b6->leave($__internal_d2d02dbad8776ac63bdea601e0a6762c38058359953436a32322e3694930e3b6_prof);

        
        $__internal_695a079ee56cc7391b238b7c75366cac3515c090f1c10ff3915b9fdd1dbec4d0->leave($__internal_695a079ee56cc7391b238b7c75366cac3515c090f1c10ff3915b9fdd1dbec4d0_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_da3b2b227c10bf4a6c90bfbf9149ecb58df318517b3def3d42265bf24e4c9e9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da3b2b227c10bf4a6c90bfbf9149ecb58df318517b3def3d42265bf24e4c9e9f->enter($__internal_da3b2b227c10bf4a6c90bfbf9149ecb58df318517b3def3d42265bf24e4c9e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_cf0b7c7ee418bcc3a857b80bdf8ca3c84026b8683e8d3e2e35b90e6f968a858d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf0b7c7ee418bcc3a857b80bdf8ca3c84026b8683e8d3e2e35b90e6f968a858d->enter($__internal_cf0b7c7ee418bcc3a857b80bdf8ca3c84026b8683e8d3e2e35b90e6f968a858d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_cf0b7c7ee418bcc3a857b80bdf8ca3c84026b8683e8d3e2e35b90e6f968a858d->leave($__internal_cf0b7c7ee418bcc3a857b80bdf8ca3c84026b8683e8d3e2e35b90e6f968a858d_prof);

        
        $__internal_da3b2b227c10bf4a6c90bfbf9149ecb58df318517b3def3d42265bf24e4c9e9f->leave($__internal_da3b2b227c10bf4a6c90bfbf9149ecb58df318517b3def3d42265bf24e4c9e9f_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_092a3c743514dc63a98a74837b2618c4e7951ac42013d5261eefa2fe6dc7ad6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_092a3c743514dc63a98a74837b2618c4e7951ac42013d5261eefa2fe6dc7ad6d->enter($__internal_092a3c743514dc63a98a74837b2618c4e7951ac42013d5261eefa2fe6dc7ad6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_9728a834d7f7bd614120058e2503f1cc0b754c6520f18b754d0e0928d29a0b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9728a834d7f7bd614120058e2503f1cc0b754c6520f18b754d0e0928d29a0b49->enter($__internal_9728a834d7f7bd614120058e2503f1cc0b754c6520f18b754d0e0928d29a0b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9728a834d7f7bd614120058e2503f1cc0b754c6520f18b754d0e0928d29a0b49->leave($__internal_9728a834d7f7bd614120058e2503f1cc0b754c6520f18b754d0e0928d29a0b49_prof);

        
        $__internal_092a3c743514dc63a98a74837b2618c4e7951ac42013d5261eefa2fe6dc7ad6d->leave($__internal_092a3c743514dc63a98a74837b2618c4e7951ac42013d5261eefa2fe6dc7ad6d_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_a3252a87cb848fc38257b47884f7b73e8cfc53897ff789f9d7e9e0c067aec33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3252a87cb848fc38257b47884f7b73e8cfc53897ff789f9d7e9e0c067aec33e->enter($__internal_a3252a87cb848fc38257b47884f7b73e8cfc53897ff789f9d7e9e0c067aec33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_1aca9faf12f4498114e600c6a3a56a7b4b16d8a55c6bccc03454ae0b84fffdba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aca9faf12f4498114e600c6a3a56a7b4b16d8a55c6bccc03454ae0b84fffdba->enter($__internal_1aca9faf12f4498114e600c6a3a56a7b4b16d8a55c6bccc03454ae0b84fffdba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_1aca9faf12f4498114e600c6a3a56a7b4b16d8a55c6bccc03454ae0b84fffdba->leave($__internal_1aca9faf12f4498114e600c6a3a56a7b4b16d8a55c6bccc03454ae0b84fffdba_prof);

        
        $__internal_a3252a87cb848fc38257b47884f7b73e8cfc53897ff789f9d7e9e0c067aec33e->leave($__internal_a3252a87cb848fc38257b47884f7b73e8cfc53897ff789f9d7e9e0c067aec33e_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a09d2e0ba31caa5913fcca1e7cccceec8d735c39825878b6d16ae5250cad92fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a09d2e0ba31caa5913fcca1e7cccceec8d735c39825878b6d16ae5250cad92fe->enter($__internal_a09d2e0ba31caa5913fcca1e7cccceec8d735c39825878b6d16ae5250cad92fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_dc26f3695b34cb01e1efbf1b49fa4c8367b2bb3f76c6dd72e41cbfda6f4267e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc26f3695b34cb01e1efbf1b49fa4c8367b2bb3f76c6dd72e41cbfda6f4267e5->enter($__internal_dc26f3695b34cb01e1efbf1b49fa4c8367b2bb3f76c6dd72e41cbfda6f4267e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_dc26f3695b34cb01e1efbf1b49fa4c8367b2bb3f76c6dd72e41cbfda6f4267e5->leave($__internal_dc26f3695b34cb01e1efbf1b49fa4c8367b2bb3f76c6dd72e41cbfda6f4267e5_prof);

        
        $__internal_a09d2e0ba31caa5913fcca1e7cccceec8d735c39825878b6d16ae5250cad92fe->leave($__internal_a09d2e0ba31caa5913fcca1e7cccceec8d735c39825878b6d16ae5250cad92fe_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_a02cd828a848509219723355a8c3c53aba51978f994fe429701ee54dc67a719f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a02cd828a848509219723355a8c3c53aba51978f994fe429701ee54dc67a719f->enter($__internal_a02cd828a848509219723355a8c3c53aba51978f994fe429701ee54dc67a719f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_5689e0ed693dd59c72e3ba960041299440a4a84babed58ab480f77c9dc5014a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5689e0ed693dd59c72e3ba960041299440a4a84babed58ab480f77c9dc5014a4->enter($__internal_5689e0ed693dd59c72e3ba960041299440a4a84babed58ab480f77c9dc5014a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_5689e0ed693dd59c72e3ba960041299440a4a84babed58ab480f77c9dc5014a4->leave($__internal_5689e0ed693dd59c72e3ba960041299440a4a84babed58ab480f77c9dc5014a4_prof);

        
        $__internal_a02cd828a848509219723355a8c3c53aba51978f994fe429701ee54dc67a719f->leave($__internal_a02cd828a848509219723355a8c3c53aba51978f994fe429701ee54dc67a719f_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_e36fb9fc99e684959a1e118bfc5857187febdb6093b1291d870e96cdc069e875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e36fb9fc99e684959a1e118bfc5857187febdb6093b1291d870e96cdc069e875->enter($__internal_e36fb9fc99e684959a1e118bfc5857187febdb6093b1291d870e96cdc069e875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_92994c54ef6aafaf0a3c5b95397be22792bf19f30ee7c808afd3d61653ac51f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92994c54ef6aafaf0a3c5b95397be22792bf19f30ee7c808afd3d61653ac51f2->enter($__internal_92994c54ef6aafaf0a3c5b95397be22792bf19f30ee7c808afd3d61653ac51f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_92994c54ef6aafaf0a3c5b95397be22792bf19f30ee7c808afd3d61653ac51f2->leave($__internal_92994c54ef6aafaf0a3c5b95397be22792bf19f30ee7c808afd3d61653ac51f2_prof);

        
        $__internal_e36fb9fc99e684959a1e118bfc5857187febdb6093b1291d870e96cdc069e875->leave($__internal_e36fb9fc99e684959a1e118bfc5857187febdb6093b1291d870e96cdc069e875_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_c1f3a31b037e821d6cdb926b5e454ae47fb0c727fb0188ea7290ba8327859587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1f3a31b037e821d6cdb926b5e454ae47fb0c727fb0188ea7290ba8327859587->enter($__internal_c1f3a31b037e821d6cdb926b5e454ae47fb0c727fb0188ea7290ba8327859587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_a0abb9eaa4f45bda4a6f1cc87eafc8a346a1ff1f7e31ee8eecff50510db6928e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0abb9eaa4f45bda4a6f1cc87eafc8a346a1ff1f7e31ee8eecff50510db6928e->enter($__internal_a0abb9eaa4f45bda4a6f1cc87eafc8a346a1ff1f7e31ee8eecff50510db6928e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a0abb9eaa4f45bda4a6f1cc87eafc8a346a1ff1f7e31ee8eecff50510db6928e->leave($__internal_a0abb9eaa4f45bda4a6f1cc87eafc8a346a1ff1f7e31ee8eecff50510db6928e_prof);

        
        $__internal_c1f3a31b037e821d6cdb926b5e454ae47fb0c727fb0188ea7290ba8327859587->leave($__internal_c1f3a31b037e821d6cdb926b5e454ae47fb0c727fb0188ea7290ba8327859587_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_d7232115f55a5eb2a34f876e8a75a97ccd33268c4aef0726582f4038bc603050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7232115f55a5eb2a34f876e8a75a97ccd33268c4aef0726582f4038bc603050->enter($__internal_d7232115f55a5eb2a34f876e8a75a97ccd33268c4aef0726582f4038bc603050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_b5156ed0740c9215ddb1d4c0a2cd823f3dcc7c5fdd60b62f1ed02c49458b773a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5156ed0740c9215ddb1d4c0a2cd823f3dcc7c5fdd60b62f1ed02c49458b773a->enter($__internal_b5156ed0740c9215ddb1d4c0a2cd823f3dcc7c5fdd60b62f1ed02c49458b773a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b5156ed0740c9215ddb1d4c0a2cd823f3dcc7c5fdd60b62f1ed02c49458b773a->leave($__internal_b5156ed0740c9215ddb1d4c0a2cd823f3dcc7c5fdd60b62f1ed02c49458b773a_prof);

        
        $__internal_d7232115f55a5eb2a34f876e8a75a97ccd33268c4aef0726582f4038bc603050->leave($__internal_d7232115f55a5eb2a34f876e8a75a97ccd33268c4aef0726582f4038bc603050_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_cae91370ca0cad2bf8bf2e3ec3816165b787818ecb9285bd3367a14ff0fcb808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cae91370ca0cad2bf8bf2e3ec3816165b787818ecb9285bd3367a14ff0fcb808->enter($__internal_cae91370ca0cad2bf8bf2e3ec3816165b787818ecb9285bd3367a14ff0fcb808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_065b53a3ca6f0b7db483a2c3a12cdf7da535958f3cee5c600f02b2bfb3aaa2f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065b53a3ca6f0b7db483a2c3a12cdf7da535958f3cee5c600f02b2bfb3aaa2f5->enter($__internal_065b53a3ca6f0b7db483a2c3a12cdf7da535958f3cee5c600f02b2bfb3aaa2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_065b53a3ca6f0b7db483a2c3a12cdf7da535958f3cee5c600f02b2bfb3aaa2f5->leave($__internal_065b53a3ca6f0b7db483a2c3a12cdf7da535958f3cee5c600f02b2bfb3aaa2f5_prof);

        
        $__internal_cae91370ca0cad2bf8bf2e3ec3816165b787818ecb9285bd3367a14ff0fcb808->leave($__internal_cae91370ca0cad2bf8bf2e3ec3816165b787818ecb9285bd3367a14ff0fcb808_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_264dad7aa337426afe3af292687786b0ff149837bfa5c0a84fadc3d312617c94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_264dad7aa337426afe3af292687786b0ff149837bfa5c0a84fadc3d312617c94->enter($__internal_264dad7aa337426afe3af292687786b0ff149837bfa5c0a84fadc3d312617c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_a80275220cf33135c885ec42590894c3585c87ffeede30926b5dff8c001da941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a80275220cf33135c885ec42590894c3585c87ffeede30926b5dff8c001da941->enter($__internal_a80275220cf33135c885ec42590894c3585c87ffeede30926b5dff8c001da941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_a80275220cf33135c885ec42590894c3585c87ffeede30926b5dff8c001da941->leave($__internal_a80275220cf33135c885ec42590894c3585c87ffeede30926b5dff8c001da941_prof);

        
        $__internal_264dad7aa337426afe3af292687786b0ff149837bfa5c0a84fadc3d312617c94->leave($__internal_264dad7aa337426afe3af292687786b0ff149837bfa5c0a84fadc3d312617c94_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
