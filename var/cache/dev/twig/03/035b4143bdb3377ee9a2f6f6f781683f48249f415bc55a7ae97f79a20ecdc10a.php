<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_697fd7f9ff0ebf1e8f1b3c8c1e31439dbacebc9f1dd2f9c00931c4f91a7957a4 extends Twig_Template
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
        $__internal_c27be416f639ff9ce948601cc8f03eee941fe839593e8716f183bb49216c209b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c27be416f639ff9ce948601cc8f03eee941fe839593e8716f183bb49216c209b->enter($__internal_c27be416f639ff9ce948601cc8f03eee941fe839593e8716f183bb49216c209b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_21dff73ef809fa60628aad8c22bea397afe173b1da95ab2b324620a7385322f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21dff73ef809fa60628aad8c22bea397afe173b1da95ab2b324620a7385322f3->enter($__internal_21dff73ef809fa60628aad8c22bea397afe173b1da95ab2b324620a7385322f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_c27be416f639ff9ce948601cc8f03eee941fe839593e8716f183bb49216c209b->leave($__internal_c27be416f639ff9ce948601cc8f03eee941fe839593e8716f183bb49216c209b_prof);

        
        $__internal_21dff73ef809fa60628aad8c22bea397afe173b1da95ab2b324620a7385322f3->leave($__internal_21dff73ef809fa60628aad8c22bea397afe173b1da95ab2b324620a7385322f3_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_9a617ab898f27f68201502c55a30fb85f8d31127864d4906b4dc819bd211fd01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a617ab898f27f68201502c55a30fb85f8d31127864d4906b4dc819bd211fd01->enter($__internal_9a617ab898f27f68201502c55a30fb85f8d31127864d4906b4dc819bd211fd01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_5dd106165e163d607a0c1f77afc1debc0d765069255b4e76abe4a32bfd498b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd106165e163d607a0c1f77afc1debc0d765069255b4e76abe4a32bfd498b70->enter($__internal_5dd106165e163d607a0c1f77afc1debc0d765069255b4e76abe4a32bfd498b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_5dd106165e163d607a0c1f77afc1debc0d765069255b4e76abe4a32bfd498b70->leave($__internal_5dd106165e163d607a0c1f77afc1debc0d765069255b4e76abe4a32bfd498b70_prof);

        
        $__internal_9a617ab898f27f68201502c55a30fb85f8d31127864d4906b4dc819bd211fd01->leave($__internal_9a617ab898f27f68201502c55a30fb85f8d31127864d4906b4dc819bd211fd01_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_1adb271936d88a9883d30049779b88b5d9dc3841c2cca7195fb42cfd1744cf1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1adb271936d88a9883d30049779b88b5d9dc3841c2cca7195fb42cfd1744cf1d->enter($__internal_1adb271936d88a9883d30049779b88b5d9dc3841c2cca7195fb42cfd1744cf1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_2e71c725b5a11103fe8a666b219acd15a201973332c7b2cec896e89a08bf231e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e71c725b5a11103fe8a666b219acd15a201973332c7b2cec896e89a08bf231e->enter($__internal_2e71c725b5a11103fe8a666b219acd15a201973332c7b2cec896e89a08bf231e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_2e71c725b5a11103fe8a666b219acd15a201973332c7b2cec896e89a08bf231e->leave($__internal_2e71c725b5a11103fe8a666b219acd15a201973332c7b2cec896e89a08bf231e_prof);

        
        $__internal_1adb271936d88a9883d30049779b88b5d9dc3841c2cca7195fb42cfd1744cf1d->leave($__internal_1adb271936d88a9883d30049779b88b5d9dc3841c2cca7195fb42cfd1744cf1d_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_e3d53ee1db5ebce0c9de04b6f44593a7eab4bd42533d1f9354846589d4ccf14f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3d53ee1db5ebce0c9de04b6f44593a7eab4bd42533d1f9354846589d4ccf14f->enter($__internal_e3d53ee1db5ebce0c9de04b6f44593a7eab4bd42533d1f9354846589d4ccf14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_c308c9752a5dd55cb997973981083785f9d478f5909059a5f5b9af6c98c9548b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c308c9752a5dd55cb997973981083785f9d478f5909059a5f5b9af6c98c9548b->enter($__internal_c308c9752a5dd55cb997973981083785f9d478f5909059a5f5b9af6c98c9548b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_c308c9752a5dd55cb997973981083785f9d478f5909059a5f5b9af6c98c9548b->leave($__internal_c308c9752a5dd55cb997973981083785f9d478f5909059a5f5b9af6c98c9548b_prof);

        
        $__internal_e3d53ee1db5ebce0c9de04b6f44593a7eab4bd42533d1f9354846589d4ccf14f->leave($__internal_e3d53ee1db5ebce0c9de04b6f44593a7eab4bd42533d1f9354846589d4ccf14f_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_76df2e73a49c79fae7bd5298a9ab4efa58a6206a2df570b256e0913e953b2e85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76df2e73a49c79fae7bd5298a9ab4efa58a6206a2df570b256e0913e953b2e85->enter($__internal_76df2e73a49c79fae7bd5298a9ab4efa58a6206a2df570b256e0913e953b2e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_3e82bb8259d4539de42cb96496823e65c17a5e75ace3f370d35c14dcc7e7342e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e82bb8259d4539de42cb96496823e65c17a5e75ace3f370d35c14dcc7e7342e->enter($__internal_3e82bb8259d4539de42cb96496823e65c17a5e75ace3f370d35c14dcc7e7342e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_3e82bb8259d4539de42cb96496823e65c17a5e75ace3f370d35c14dcc7e7342e->leave($__internal_3e82bb8259d4539de42cb96496823e65c17a5e75ace3f370d35c14dcc7e7342e_prof);

        
        $__internal_76df2e73a49c79fae7bd5298a9ab4efa58a6206a2df570b256e0913e953b2e85->leave($__internal_76df2e73a49c79fae7bd5298a9ab4efa58a6206a2df570b256e0913e953b2e85_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_53c19703ec4b7fef97b3bb17f7f3c091efad9b4d291713ff89183d0b7630b78c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53c19703ec4b7fef97b3bb17f7f3c091efad9b4d291713ff89183d0b7630b78c->enter($__internal_53c19703ec4b7fef97b3bb17f7f3c091efad9b4d291713ff89183d0b7630b78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_81e717ca034a48c568fa310d93e331c2e18ac212c645aa6a775d013ddbc65b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e717ca034a48c568fa310d93e331c2e18ac212c645aa6a775d013ddbc65b49->enter($__internal_81e717ca034a48c568fa310d93e331c2e18ac212c645aa6a775d013ddbc65b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_81e717ca034a48c568fa310d93e331c2e18ac212c645aa6a775d013ddbc65b49->leave($__internal_81e717ca034a48c568fa310d93e331c2e18ac212c645aa6a775d013ddbc65b49_prof);

        
        $__internal_53c19703ec4b7fef97b3bb17f7f3c091efad9b4d291713ff89183d0b7630b78c->leave($__internal_53c19703ec4b7fef97b3bb17f7f3c091efad9b4d291713ff89183d0b7630b78c_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_efdc46245a53dd3f12f4f09bc832b37087f106873300b04fae196cd564ed259a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efdc46245a53dd3f12f4f09bc832b37087f106873300b04fae196cd564ed259a->enter($__internal_efdc46245a53dd3f12f4f09bc832b37087f106873300b04fae196cd564ed259a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_efcb2ea8d73a46617ca4b07fe96d99d0f1d87be1e7e67d89e94d5ad5bd18dec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efcb2ea8d73a46617ca4b07fe96d99d0f1d87be1e7e67d89e94d5ad5bd18dec2->enter($__internal_efcb2ea8d73a46617ca4b07fe96d99d0f1d87be1e7e67d89e94d5ad5bd18dec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_efcb2ea8d73a46617ca4b07fe96d99d0f1d87be1e7e67d89e94d5ad5bd18dec2->leave($__internal_efcb2ea8d73a46617ca4b07fe96d99d0f1d87be1e7e67d89e94d5ad5bd18dec2_prof);

        
        $__internal_efdc46245a53dd3f12f4f09bc832b37087f106873300b04fae196cd564ed259a->leave($__internal_efdc46245a53dd3f12f4f09bc832b37087f106873300b04fae196cd564ed259a_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_4d3e8da038157dc3e91fa0a5bfeb6224770246fa845fdfe6d41247f467af3b57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d3e8da038157dc3e91fa0a5bfeb6224770246fa845fdfe6d41247f467af3b57->enter($__internal_4d3e8da038157dc3e91fa0a5bfeb6224770246fa845fdfe6d41247f467af3b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_b3eea74ac95230b1c76aa685cf3fda6235ad1147c5055d7792078a48c400f84c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3eea74ac95230b1c76aa685cf3fda6235ad1147c5055d7792078a48c400f84c->enter($__internal_b3eea74ac95230b1c76aa685cf3fda6235ad1147c5055d7792078a48c400f84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_b3eea74ac95230b1c76aa685cf3fda6235ad1147c5055d7792078a48c400f84c->leave($__internal_b3eea74ac95230b1c76aa685cf3fda6235ad1147c5055d7792078a48c400f84c_prof);

        
        $__internal_4d3e8da038157dc3e91fa0a5bfeb6224770246fa845fdfe6d41247f467af3b57->leave($__internal_4d3e8da038157dc3e91fa0a5bfeb6224770246fa845fdfe6d41247f467af3b57_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_da7a1686c9bb28161c9cf66e97a4e5feab894eda771767ff03c8c0fc7bf0f96f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da7a1686c9bb28161c9cf66e97a4e5feab894eda771767ff03c8c0fc7bf0f96f->enter($__internal_da7a1686c9bb28161c9cf66e97a4e5feab894eda771767ff03c8c0fc7bf0f96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_c2612922f995b98bc00de737c84779ad8e13147d0e377804cb5f385313d03f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2612922f995b98bc00de737c84779ad8e13147d0e377804cb5f385313d03f46->enter($__internal_c2612922f995b98bc00de737c84779ad8e13147d0e377804cb5f385313d03f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_c2612922f995b98bc00de737c84779ad8e13147d0e377804cb5f385313d03f46->leave($__internal_c2612922f995b98bc00de737c84779ad8e13147d0e377804cb5f385313d03f46_prof);

        
        $__internal_da7a1686c9bb28161c9cf66e97a4e5feab894eda771767ff03c8c0fc7bf0f96f->leave($__internal_da7a1686c9bb28161c9cf66e97a4e5feab894eda771767ff03c8c0fc7bf0f96f_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_6a2d2a3acb852cf37fbf31cd5c31a5a7f9fd8ec559b0ec4957215d278cbbc90c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a2d2a3acb852cf37fbf31cd5c31a5a7f9fd8ec559b0ec4957215d278cbbc90c->enter($__internal_6a2d2a3acb852cf37fbf31cd5c31a5a7f9fd8ec559b0ec4957215d278cbbc90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_24febc94c5f89d58e4977125aef0e366d9c0960ee6f28e319c6ab9ee7775ec2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24febc94c5f89d58e4977125aef0e366d9c0960ee6f28e319c6ab9ee7775ec2c->enter($__internal_24febc94c5f89d58e4977125aef0e366d9c0960ee6f28e319c6ab9ee7775ec2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_24febc94c5f89d58e4977125aef0e366d9c0960ee6f28e319c6ab9ee7775ec2c->leave($__internal_24febc94c5f89d58e4977125aef0e366d9c0960ee6f28e319c6ab9ee7775ec2c_prof);

        
        $__internal_6a2d2a3acb852cf37fbf31cd5c31a5a7f9fd8ec559b0ec4957215d278cbbc90c->leave($__internal_6a2d2a3acb852cf37fbf31cd5c31a5a7f9fd8ec559b0ec4957215d278cbbc90c_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_a3fcab905760081446813ce3783621cce6c18a3d917336bd9dcd9fbd3156cd71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3fcab905760081446813ce3783621cce6c18a3d917336bd9dcd9fbd3156cd71->enter($__internal_a3fcab905760081446813ce3783621cce6c18a3d917336bd9dcd9fbd3156cd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_3c0147f5d04bfc04b7796eade8c28e606be2eab9359f7a5330e3cdb926691a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0147f5d04bfc04b7796eade8c28e606be2eab9359f7a5330e3cdb926691a1d->enter($__internal_3c0147f5d04bfc04b7796eade8c28e606be2eab9359f7a5330e3cdb926691a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_3c0147f5d04bfc04b7796eade8c28e606be2eab9359f7a5330e3cdb926691a1d->leave($__internal_3c0147f5d04bfc04b7796eade8c28e606be2eab9359f7a5330e3cdb926691a1d_prof);

        
        $__internal_a3fcab905760081446813ce3783621cce6c18a3d917336bd9dcd9fbd3156cd71->leave($__internal_a3fcab905760081446813ce3783621cce6c18a3d917336bd9dcd9fbd3156cd71_prof);

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
", "bootstrap_3_horizontal_layout.html.twig", "C:\\xampp\\htdocs\\anthill-inspire\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
