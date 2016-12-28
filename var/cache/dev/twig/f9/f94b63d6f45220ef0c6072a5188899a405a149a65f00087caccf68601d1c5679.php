<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_d7b06f630c8d5c69bfa809e7f37b59add7bd3bb3d1f2bc206294b67d96e7de6f extends Twig_Template
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
        $__internal_b097636b38d3630cbc6de15f1e41c69ac2599eb8185d79e8cf55496ef954372c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b097636b38d3630cbc6de15f1e41c69ac2599eb8185d79e8cf55496ef954372c->enter($__internal_b097636b38d3630cbc6de15f1e41c69ac2599eb8185d79e8cf55496ef954372c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
\t<div class=\"page-header\">
\t\t<div class=\"col-md-4\">
\t\t\t<img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "avatar", array()), "html", null, true);
        echo "\"class=\"img-thumbnail\">
\t\t</div>
\t\t<div class=\"col-md-8\">
\t\t\t<h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h2>
\t\t\t<h3>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</h3>
\t\t</div>
\t</div><!-- page-header -->
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<p>
\t\t\t\tsome crap
\t\t\t</p>
\t\t</div>
\t</div>

</div>
";
        
        $__internal_b097636b38d3630cbc6de15f1e41c69ac2599eb8185d79e8cf55496ef954372c->leave($__internal_b097636b38d3630cbc6de15f1e41c69ac2599eb8185d79e8cf55496ef954372c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 10,  34 => 9,  28 => 6,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
\t<div class=\"page-header\">
\t\t<div class=\"col-md-4\">
\t\t\t<img src=\"{{ user.avatar }}\"class=\"img-thumbnail\">
\t\t</div>
\t\t<div class=\"col-md-8\">
\t\t\t<h2>{{ user.username }}</h2>
\t\t\t<h3>{{ user.email }}</h3>
\t\t</div>
\t</div><!-- page-header -->
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<p>
\t\t\t\tsome crap
\t\t\t</p>
\t\t</div>
\t</div>

</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/var/www/html/devleagues/github/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
