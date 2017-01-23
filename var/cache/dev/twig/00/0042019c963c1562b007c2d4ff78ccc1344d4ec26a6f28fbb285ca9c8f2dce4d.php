<?php

/* @DevLeagues/Community/index.html.twig */
class __TwigTemplate_920ee8d5f5c8a39e30278d0c96ee120700496968ae4605efd31ebfb8cf3c10a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "@DevLeagues/Community/index.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14552d00e22d2a6d668e0782875e25df98beaba2d24d4178fd0bba62c327f577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14552d00e22d2a6d668e0782875e25df98beaba2d24d4178fd0bba62c327f577->enter($__internal_14552d00e22d2a6d668e0782875e25df98beaba2d24d4178fd0bba62c327f577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Community/index.html.twig"));

        $__internal_bfea837f52221403bf05216c8706a608aa2e5f1b31a6c77b6a381382de4691d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfea837f52221403bf05216c8706a608aa2e5f1b31a6c77b6a381382de4691d2->enter($__internal_bfea837f52221403bf05216c8706a608aa2e5f1b31a6c77b6a381382de4691d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Community/index.html.twig"));

        // line 3
        $context["dl_macro"] = $this->loadTemplate("DevLeaguesBundle::macros.html.twig", "@DevLeagues/Community/index.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14552d00e22d2a6d668e0782875e25df98beaba2d24d4178fd0bba62c327f577->leave($__internal_14552d00e22d2a6d668e0782875e25df98beaba2d24d4178fd0bba62c327f577_prof);

        
        $__internal_bfea837f52221403bf05216c8706a608aa2e5f1b31a6c77b6a381382de4691d2->leave($__internal_bfea837f52221403bf05216c8706a608aa2e5f1b31a6c77b6a381382de4691d2_prof);

    }

    // line 5
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_3c3a65dbae390bd3a073eb595e0b28a45e3c316e77bdec5951274e349c55a84e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c3a65dbae390bd3a073eb595e0b28a45e3c316e77bdec5951274e349c55a84e->enter($__internal_3c3a65dbae390bd3a073eb595e0b28a45e3c316e77bdec5951274e349c55a84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_12a86ac1a29def687c8e0e0018e45e1bca5a12ab44df1bbeb5fafd6b38da28a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a86ac1a29def687c8e0e0018e45e1bca5a12ab44df1bbeb5fafd6b38da28a1->enter($__internal_12a86ac1a29def687c8e0e0018e45e1bca5a12ab44df1bbeb5fafd6b38da28a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "People";
        
        $__internal_12a86ac1a29def687c8e0e0018e45e1bca5a12ab44df1bbeb5fafd6b38da28a1->leave($__internal_12a86ac1a29def687c8e0e0018e45e1bca5a12ab44df1bbeb5fafd6b38da28a1_prof);

        
        $__internal_3c3a65dbae390bd3a073eb595e0b28a45e3c316e77bdec5951274e349c55a84e->leave($__internal_3c3a65dbae390bd3a073eb595e0b28a45e3c316e77bdec5951274e349c55a84e_prof);

    }

    // line 6
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_3c4b43e49772908374943fc50f8ec6da096c1eae563cd735690509b1e918310f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c4b43e49772908374943fc50f8ec6da096c1eae563cd735690509b1e918310f->enter($__internal_3c4b43e49772908374943fc50f8ec6da096c1eae563cd735690509b1e918310f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_11bce08f29bd274d393d1fa3d1b684807f152fce1d4dd618c80b018d52488826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11bce08f29bd274d393d1fa3d1b684807f152fce1d4dd618c80b018d52488826->enter($__internal_11bce08f29bd274d393d1fa3d1b684807f152fce1d4dd618c80b018d52488826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "whatever";
        
        $__internal_11bce08f29bd274d393d1fa3d1b684807f152fce1d4dd618c80b018d52488826->leave($__internal_11bce08f29bd274d393d1fa3d1b684807f152fce1d4dd618c80b018d52488826_prof);

        
        $__internal_3c4b43e49772908374943fc50f8ec6da096c1eae563cd735690509b1e918310f->leave($__internal_3c4b43e49772908374943fc50f8ec6da096c1eae563cd735690509b1e918310f_prof);

    }

    // line 8
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_51afc35867981c858c02b9f26cad1085af474d51afd9775590df833d6571a4c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51afc35867981c858c02b9f26cad1085af474d51afd9775590df833d6571a4c0->enter($__internal_51afc35867981c858c02b9f26cad1085af474d51afd9775590df833d6571a4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_948c6f8fd36cfd8c360a09cc9ff4ac40823aaa8974190bc2cc542be99ab6e2c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_948c6f8fd36cfd8c360a09cc9ff4ac40823aaa8974190bc2cc542be99ab6e2c7->enter($__internal_948c6f8fd36cfd8c360a09cc9ff4ac40823aaa8974190bc2cc542be99ab6e2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 9
        echo "<div class=\"row\">
\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 11
            echo "\t\t";
            echo $context["dl_macro"]->getuser_reduced($context["user"]);
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</div>
";
        
        $__internal_948c6f8fd36cfd8c360a09cc9ff4ac40823aaa8974190bc2cc542be99ab6e2c7->leave($__internal_948c6f8fd36cfd8c360a09cc9ff4ac40823aaa8974190bc2cc542be99ab6e2c7_prof);

        
        $__internal_51afc35867981c858c02b9f26cad1085af474d51afd9775590df833d6571a4c0->leave($__internal_51afc35867981c858c02b9f26cad1085af474d51afd9775590df833d6571a4c0_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/Community/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 13,  97 => 11,  93 => 10,  90 => 9,  81 => 8,  63 => 6,  45 => 5,  35 => 1,  33 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"DevLeaguesBundle::base.html.twig\" %}

{% import \"DevLeaguesBundle::macros.html.twig\" as dl_macro %}

{% block page_title %}People{% endblock %}
{% block page_subtitle %}whatever{% endblock %}

{% block page_content %}
<div class=\"row\">
\t{% for user in users %}
\t\t{{ dl_macro.user_reduced(user) }}
\t{% endfor %}
</div>
{% endblock %}
", "@DevLeagues/Community/index.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/Community/index.html.twig");
    }
}
