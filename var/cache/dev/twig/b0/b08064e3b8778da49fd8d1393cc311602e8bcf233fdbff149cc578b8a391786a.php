<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b95f7ab30d76a04980f24bd0199c881ce189c1a769f07275d0dfd7c1b15da1bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b555082c26e47fe27329e3d8d58757cbec074873e46b877b6f4fe46558528f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b555082c26e47fe27329e3d8d58757cbec074873e46b877b6f4fe46558528f7d->enter($__internal_b555082c26e47fe27329e3d8d58757cbec074873e46b877b6f4fe46558528f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_91db3283520b4a57cbc69a4a2f8fcc8b1659963b3f0ce79f34a5dcb9259b7a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91db3283520b4a57cbc69a4a2f8fcc8b1659963b3f0ce79f34a5dcb9259b7a06->enter($__internal_91db3283520b4a57cbc69a4a2f8fcc8b1659963b3f0ce79f34a5dcb9259b7a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b555082c26e47fe27329e3d8d58757cbec074873e46b877b6f4fe46558528f7d->leave($__internal_b555082c26e47fe27329e3d8d58757cbec074873e46b877b6f4fe46558528f7d_prof);

        
        $__internal_91db3283520b4a57cbc69a4a2f8fcc8b1659963b3f0ce79f34a5dcb9259b7a06->leave($__internal_91db3283520b4a57cbc69a4a2f8fcc8b1659963b3f0ce79f34a5dcb9259b7a06_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_01e8b7017b472d973efd7ffd967860a02a75125b1b042d7d32ffff6179e272d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01e8b7017b472d973efd7ffd967860a02a75125b1b042d7d32ffff6179e272d0->enter($__internal_01e8b7017b472d973efd7ffd967860a02a75125b1b042d7d32ffff6179e272d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cdf96184c0591c7bf035d9c16cbd3addfa7232c8cc88f90b7c173bdae19c73f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf96184c0591c7bf035d9c16cbd3addfa7232c8cc88f90b7c173bdae19c73f0->enter($__internal_cdf96184c0591c7bf035d9c16cbd3addfa7232c8cc88f90b7c173bdae19c73f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cdf96184c0591c7bf035d9c16cbd3addfa7232c8cc88f90b7c173bdae19c73f0->leave($__internal_cdf96184c0591c7bf035d9c16cbd3addfa7232c8cc88f90b7c173bdae19c73f0_prof);

        
        $__internal_01e8b7017b472d973efd7ffd967860a02a75125b1b042d7d32ffff6179e272d0->leave($__internal_01e8b7017b472d973efd7ffd967860a02a75125b1b042d7d32ffff6179e272d0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_98d1cd9180a1c1e05d6d39a796ecf3dd01bc730a9a74a9d062f03f62d487580c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98d1cd9180a1c1e05d6d39a796ecf3dd01bc730a9a74a9d062f03f62d487580c->enter($__internal_98d1cd9180a1c1e05d6d39a796ecf3dd01bc730a9a74a9d062f03f62d487580c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a59a58ffc490d5cd23fd458442dbea417e492c7c21bd9bbb6c2ca2e9faf1dbbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59a58ffc490d5cd23fd458442dbea417e492c7c21bd9bbb6c2ca2e9faf1dbbe->enter($__internal_a59a58ffc490d5cd23fd458442dbea417e492c7c21bd9bbb6c2ca2e9faf1dbbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a59a58ffc490d5cd23fd458442dbea417e492c7c21bd9bbb6c2ca2e9faf1dbbe->leave($__internal_a59a58ffc490d5cd23fd458442dbea417e492c7c21bd9bbb6c2ca2e9faf1dbbe_prof);

        
        $__internal_98d1cd9180a1c1e05d6d39a796ecf3dd01bc730a9a74a9d062f03f62d487580c->leave($__internal_98d1cd9180a1c1e05d6d39a796ecf3dd01bc730a9a74a9d062f03f62d487580c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_01feecef2f28fb98c44ca1344730a191723f1c65656a06dbd920d18a2340e7e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01feecef2f28fb98c44ca1344730a191723f1c65656a06dbd920d18a2340e7e9->enter($__internal_01feecef2f28fb98c44ca1344730a191723f1c65656a06dbd920d18a2340e7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_87ece8721d05abb1d5970c9670b4fa1af43071fa2e5a1a2ac42735b7322b2629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ece8721d05abb1d5970c9670b4fa1af43071fa2e5a1a2ac42735b7322b2629->enter($__internal_87ece8721d05abb1d5970c9670b4fa1af43071fa2e5a1a2ac42735b7322b2629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_87ece8721d05abb1d5970c9670b4fa1af43071fa2e5a1a2ac42735b7322b2629->leave($__internal_87ece8721d05abb1d5970c9670b4fa1af43071fa2e5a1a2ac42735b7322b2629_prof);

        
        $__internal_01feecef2f28fb98c44ca1344730a191723f1c65656a06dbd920d18a2340e7e9->leave($__internal_01feecef2f28fb98c44ca1344730a191723f1c65656a06dbd920d18a2340e7e9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\anthill-inspire\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
