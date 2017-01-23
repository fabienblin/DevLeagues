<?php

/* @SonataDoctrineORMAdmin/Block/block_audit.html.twig */
class __TwigTemplate_4779b8616d6a1cf30d6bd6d10ac08cc1e7c299a89f0c1259211b8a4687aaa593 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataBlockBundle:Block:block_base.html.twig", "@SonataDoctrineORMAdmin/Block/block_audit.html.twig", 11);
        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c416360cce400cc3f7b2cbceb470310537a305ac8a257eec2ff77f83aa26eef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c416360cce400cc3f7b2cbceb470310537a305ac8a257eec2ff77f83aa26eef->enter($__internal_0c416360cce400cc3f7b2cbceb470310537a305ac8a257eec2ff77f83aa26eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/Block/block_audit.html.twig"));

        $__internal_6017c03bef99fd5096899d54eecf83bc7d456d741dc7a5192dbfbfcc165ac2f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6017c03bef99fd5096899d54eecf83bc7d456d741dc7a5192dbfbfcc165ac2f6->enter($__internal_6017c03bef99fd5096899d54eecf83bc7d456d741dc7a5192dbfbfcc165ac2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/Block/block_audit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c416360cce400cc3f7b2cbceb470310537a305ac8a257eec2ff77f83aa26eef->leave($__internal_0c416360cce400cc3f7b2cbceb470310537a305ac8a257eec2ff77f83aa26eef_prof);

        
        $__internal_6017c03bef99fd5096899d54eecf83bc7d456d741dc7a5192dbfbfcc165ac2f6->leave($__internal_6017c03bef99fd5096899d54eecf83bc7d456d741dc7a5192dbfbfcc165ac2f6_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_2310abfdb3e9ca756ec1d4c8dde6742335dba7dfb92eb0fd505040bad7e4921f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2310abfdb3e9ca756ec1d4c8dde6742335dba7dfb92eb0fd505040bad7e4921f->enter($__internal_2310abfdb3e9ca756ec1d4c8dde6742335dba7dfb92eb0fd505040bad7e4921f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_7a9025362ec11d82fb2bf65dbdbef8710e981e05d2ace16db47350e6236e652c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a9025362ec11d82fb2bf65dbdbef8710e981e05d2ace16db47350e6236e652c->enter($__internal_7a9025362ec11d82fb2bf65dbdbef8710e981e05d2ace16db47350e6236e652c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">
                <i class=\"fa fa-history\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_audit_log", array(), "SonataAdminBundle"), "html", null, true);
        echo "
            </h3>
        </div>

        <div class=\"box-body\">
            <div class=\"panel-group\" id=\"accordion\">
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["revisions"] ?? $this->getContext($context, "revisions")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 24
            echo "                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                                    ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["revision"], "revision", array()), "rev", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["revision"], "revision", array()), "username", array()), "html", null, true);
            echo "
                                    - ";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["revision"], "revision", array()), "timestamp", array())), "html", null, true);
            echo "
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapse";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"panel-collapse collapse ";
            echo (($this->getAttribute($context["loop"], "first", array())) ? ("in") : (""));
            echo "\">
                            <div class=\"panel-body\">
                                <ul>
                                    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["revision"], "entities", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["changedEntity"]) {
                // line 37
                echo "                                        <li>
                                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["changedEntity"], "entity", array()), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["changedEntity"], "revisionType", array()), "html", null, true);
                echo "
                                            / ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["changedEntity"], "className", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["changedEntity"], "id", array()), "id", array()), "html", null, true);
                echo "
                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['changedEntity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                                </ul>
                            </div>
                        </div>
                    </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </div>
        </div>
    </div>

";
        
        $__internal_7a9025362ec11d82fb2bf65dbdbef8710e981e05d2ace16db47350e6236e652c->leave($__internal_7a9025362ec11d82fb2bf65dbdbef8710e981e05d2ace16db47350e6236e652c_prof);

        
        $__internal_2310abfdb3e9ca756ec1d4c8dde6742335dba7dfb92eb0fd505040bad7e4921f->leave($__internal_2310abfdb3e9ca756ec1d4c8dde6742335dba7dfb92eb0fd505040bad7e4921f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/Block/block_audit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 47,  134 => 42,  123 => 39,  117 => 38,  114 => 37,  110 => 36,  102 => 33,  95 => 29,  89 => 28,  85 => 27,  80 => 24,  63 => 23,  54 => 17,  49 => 14,  40 => 13,  11 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% extends 'SonataBlockBundle:Block:block_base.html.twig' %}

{% block block %}
    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">
                <i class=\"fa fa-history\"></i> {{ 'title_audit_log'|trans({}, 'SonataAdminBundle') }}
            </h3>
        </div>

        <div class=\"box-body\">
            <div class=\"panel-group\" id=\"accordion\">
                {% for revision in revisions %}
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse{{ loop.index }}\">
                                    {{ revision.revision.rev }} - {{ revision.revision.username }}
                                    - {{ revision.revision.timestamp | date }}
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapse{{ loop.index }}\" class=\"panel-collapse collapse {{ loop.first ? \"in\" : \"\" }}\">
                            <div class=\"panel-body\">
                                <ul>
                                    {% for changedEntity in revision.entities %}
                                        <li>
                                            {{ changedEntity.entity }} / {{ changedEntity.revisionType }}
                                            / {{ changedEntity.className }} - {{ changedEntity.id.id }}
                                        </li>
                                    {% endfor %}
                                </ul>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>

{% endblock %}
", "@SonataDoctrineORMAdmin/Block/block_audit.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/Block/block_audit.html.twig");
    }
}
