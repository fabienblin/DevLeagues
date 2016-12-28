<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_0d424cdc80d178afe334f8198c4084a5cf212c369d77551b927e48eb567da0b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46b3bb8ca5a9bb10556181b57b52f1f42f19d8dbf9f292e4b5186ab48ae89a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b3bb8ca5a9bb10556181b57b52f1f42f19d8dbf9f292e4b5186ab48ae89a2e->enter($__internal_46b3bb8ca5a9bb10556181b57b52f1f42f19d8dbf9f292e4b5186ab48ae89a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46b3bb8ca5a9bb10556181b57b52f1f42f19d8dbf9f292e4b5186ab48ae89a2e->leave($__internal_46b3bb8ca5a9bb10556181b57b52f1f42f19d8dbf9f292e4b5186ab48ae89a2e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_111d604d40df42c6a8494d6cd05cdd7c794e5ac83957fecb8f331818b3d0d27c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_111d604d40df42c6a8494d6cd05cdd7c794e5ac83957fecb8f331818b3d0d27c->enter($__internal_111d604d40df42c6a8494d6cd05cdd7c794e5ac83957fecb8f331818b3d0d27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div>
\t";
        // line 6
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 7
            echo "
\t\t\t\t<a href=\"";
            // line 8
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\">Edit Profile</a>
\t\t\t\t<a href=\"";
            // line 9
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Logout</a>



\t";
        } else {
            // line 14
            echo "\t\t\t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">
\t\t\t";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "
\t\t</a>
\t";
        }
        // line 18
        echo "</div>

";
        // line 20
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 21
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 22
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 23
                    echo "\t\t\t<div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
\t\t\t\t";
                    // line 24
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
\t\t\t</div>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 29
        echo "
<div>
\t";
        // line 31
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 33
        echo "</div>

";
        
        $__internal_111d604d40df42c6a8494d6cd05cdd7c794e5ac83957fecb8f331818b3d0d27c->leave($__internal_111d604d40df42c6a8494d6cd05cdd7c794e5ac83957fecb8f331818b3d0d27c_prof);

    }

    // line 31
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_395e8b14b3260896aceb61094b405413c7b6e611716be8696faa9eb3c2661c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_395e8b14b3260896aceb61094b405413c7b6e611716be8696faa9eb3c2661c06->enter($__internal_395e8b14b3260896aceb61094b405413c7b6e611716be8696faa9eb3c2661c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 32
        echo "\t";
        
        $__internal_395e8b14b3260896aceb61094b405413c7b6e611716be8696faa9eb3c2661c06->leave($__internal_395e8b14b3260896aceb61094b405413c7b6e611716be8696faa9eb3c2661c06_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 32,  125 => 31,  116 => 33,  114 => 31,  110 => 29,  103 => 27,  94 => 24,  89 => 23,  84 => 22,  79 => 21,  77 => 20,  73 => 18,  67 => 15,  62 => 14,  54 => 9,  50 => 8,  47 => 7,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'DevLeaguesBundle::base.html.twig' %}

{% block body %}

<div>
\t{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}

\t\t\t\t<a href=\"{{ path('fos_user_profile_edit') }}\">Edit Profile</a>
\t\t\t\t<a href=\"{{ path('fos_user_security_logout') }}\">Logout</a>



\t{% else %}
\t\t\t<a href=\"{{ path('fos_user_security_login') }}\">
\t\t\t{{ 'layout.login'|trans({}, 'FOSUserBundle') }}
\t\t</a>
\t{% endif %}
</div>

{% if app.request.hasPreviousSession %}
\t{% for type, messages in app.session.flashbag.all() %}
\t\t{% for message in messages %}
\t\t\t<div class=\"flash-{{ type }}\">
\t\t\t\t{{ message }}
\t\t\t</div>
\t\t{% endfor %}
\t{% endfor %}
{% endif %}

<div>
\t{% block fos_user_content %}
\t{% endblock fos_user_content %}
</div>

{% endblock %}
", "FOSUserBundle::layout.html.twig", "/var/www/html/devleagues/github/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
