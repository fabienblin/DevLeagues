<?php

/* SonataAdminBundle:CRUD:base_history.html.twig */
class __TwigTemplate_f047af1c38a44d6a569838e62bc88e25b9b87f0c261033739b5b562372d26ce2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_history.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c92c9c2adea7546582673179031c1be3ff373e99a36c2b45203657ef2c18248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c92c9c2adea7546582673179031c1be3ff373e99a36c2b45203657ef2c18248->enter($__internal_6c92c9c2adea7546582673179031c1be3ff373e99a36c2b45203657ef2c18248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_history.html.twig"));

        $__internal_8ac76d5b929dd816dfc340b3f606a80c34ac54b51a7e82fc3983bcaf2aea5a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac76d5b929dd816dfc340b3f606a80c34ac54b51a7e82fc3983bcaf2aea5a93->enter($__internal_8ac76d5b929dd816dfc340b3f606a80c34ac54b51a7e82fc3983bcaf2aea5a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_history.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c92c9c2adea7546582673179031c1be3ff373e99a36c2b45203657ef2c18248->leave($__internal_6c92c9c2adea7546582673179031c1be3ff373e99a36c2b45203657ef2c18248_prof);

        
        $__internal_8ac76d5b929dd816dfc340b3f606a80c34ac54b51a7e82fc3983bcaf2aea5a93->leave($__internal_8ac76d5b929dd816dfc340b3f606a80c34ac54b51a7e82fc3983bcaf2aea5a93_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_0d90db68f5f7e87acfe2bee0053d62ca92ca72a200490232b835a6bbbb62ca68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d90db68f5f7e87acfe2bee0053d62ca92ca72a200490232b835a6bbbb62ca68->enter($__internal_0d90db68f5f7e87acfe2bee0053d62ca92ca72a200490232b835a6bbbb62ca68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_a993c4bde4fd0318f5db774be98d138cfaf359159693832e6e43eefa9837719a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a993c4bde4fd0318f5db774be98d138cfaf359159693832e6e43eefa9837719a->enter($__internal_a993c4bde4fd0318f5db774be98d138cfaf359159693832e6e43eefa9837719a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_history.html.twig", 15)->display($context);
        
        $__internal_a993c4bde4fd0318f5db774be98d138cfaf359159693832e6e43eefa9837719a->leave($__internal_a993c4bde4fd0318f5db774be98d138cfaf359159693832e6e43eefa9837719a_prof);

        
        $__internal_0d90db68f5f7e87acfe2bee0053d62ca92ca72a200490232b835a6bbbb62ca68->leave($__internal_0d90db68f5f7e87acfe2bee0053d62ca92ca72a200490232b835a6bbbb62ca68_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_4f947cbf86b75e318333c004507c42a2708ab16ee8170dd4a3c43c803cc91fdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f947cbf86b75e318333c004507c42a2708ab16ee8170dd4a3c43c803cc91fdd->enter($__internal_4f947cbf86b75e318333c004507c42a2708ab16ee8170dd4a3c43c803cc91fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ab45637aca4e09e27e7300eb843f74c91bbd47493a01159964b0055a40eab00e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab45637aca4e09e27e7300eb843f74c91bbd47493a01159964b0055a40eab00e->enter($__internal_ab45637aca4e09e27e7300eb843f74c91bbd47493a01159964b0055a40eab00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "
    <div class=\"row\">
        <div class=\"col-md-5\">
            <div class=\"box box-primary\">
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\" id=\"revisions\">
                        <thead>
                        <tr>
                            <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("td_revision", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                            <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("td_timestamp", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                            <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                            <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("td_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                            <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("td_compare", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 35
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
            // line 36
            echo "                            <tr class=\"";
            if (((($context["currentRevision"] ?? $this->getContext($context, "currentRevision")) != false) && ($this->getAttribute($context["revision"], "rev", array()) == $this->getAttribute(($context["currentRevision"] ?? $this->getContext($context, "currentRevision")), "rev", array())))) {
                echo "current-revision";
            }
            echo "\">
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "rev", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 38
            $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "history_revision_timestamp"), "method"), "SonataAdminBundle:CRUD:base_history.html.twig", 38)->display($context);
            echo "</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, (($this->getAttribute($context["revision"], "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["revision"], "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_unknown_user", array(), "SonataAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_unknown_user", array(), "SonataAdminBundle"))), "html", null, true);
            echo "</td>
                                <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history_view_revision", 1 => ($context["object"] ?? $this->getContext($context, "object")), 2 => array("revision" => $this->getAttribute($context["revision"], "rev", array()))), "method"), "html", null, true);
            echo "\" class=\"revision-link\" rel=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "rev", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_view_revision", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a></td>
                                <td>
                                    ";
            // line 42
            if (((($context["currentRevision"] ?? $this->getContext($context, "currentRevision")) == false) || ($this->getAttribute($context["revision"], "rev", array()) == $this->getAttribute(($context["currentRevision"] ?? $this->getContext($context, "currentRevision")), "rev", array())))) {
                // line 43
                echo "                                        /
                                    ";
            } else {
                // line 45
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history_compare_revisions", 1 => ($context["object"] ?? $this->getContext($context, "object")), 2 => array("base_revision" => $this->getAttribute(($context["currentRevision"] ?? $this->getContext($context, "currentRevision")), "rev", array()), "compare_revision" => $this->getAttribute($context["revision"], "rev", array()))), "method"), "html", null, true);
                echo "\" class=\"revision-compare-link\" rel=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "rev", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_compare_revision", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a>
                                    ";
            }
            // line 47
            echo "                                </td>
                            </tr>
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
        // line 50
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id=\"revision-detail\" class=\"col-md-7 revision-detail\">

        </div>
    </div>

    <script>
        jQuery(document).ready(function() {

            jQuery('a.revision-link, a.revision-compare-link').bind('click', function(event) {
                event.stopPropagation();
                event.preventDefault();

                action = jQuery(this).hasClass('revision-link')
                    ? 'show'
                    : 'compare';

                jQuery('#revision-detail').html('');

                if(action == 'show'){
                    jQuery('table#revisions tbody tr').removeClass('current');
                    jQuery(this).parent('').removeClass('current');
                }

                jQuery.ajax({
                    url: jQuery(this).attr('href'),
                    dataType: 'html',
                    success: function(data) {
                        jQuery('#revision-detail').html(data);
                    }
                });

                return false;
            });

        });
    </script>
";
        
        $__internal_ab45637aca4e09e27e7300eb843f74c91bbd47493a01159964b0055a40eab00e->leave($__internal_ab45637aca4e09e27e7300eb843f74c91bbd47493a01159964b0055a40eab00e_prof);

        
        $__internal_4f947cbf86b75e318333c004507c42a2708ab16ee8170dd4a3c43c803cc91fdd->leave($__internal_4f947cbf86b75e318333c004507c42a2708ab16ee8170dd4a3c43c803cc91fdd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 50,  162 => 47,  152 => 45,  148 => 43,  146 => 42,  137 => 40,  133 => 39,  129 => 38,  125 => 37,  118 => 36,  101 => 35,  94 => 31,  90 => 30,  86 => 29,  82 => 28,  78 => 27,  68 => 19,  59 => 18,  49 => 15,  40 => 14,  19 => 12,);
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

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block content %}

    <div class=\"row\">
        <div class=\"col-md-5\">
            <div class=\"box box-primary\">
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\" id=\"revisions\">
                        <thead>
                        <tr>
                            <th>{{ 'td_revision'|trans({}, 'SonataAdminBundle') }}</th>
                            <th>{{ 'td_timestamp'|trans({}, 'SonataAdminBundle') }}</th>
                            <th>{{ 'td_username'|trans({}, 'SonataAdminBundle') }}</th>
                            <th>{{ 'td_action'|trans({}, 'SonataAdminBundle') }}</th>
                            <th>{{ 'td_compare'|trans({}, 'SonataAdminBundle') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for revision in revisions %}
                            <tr class=\"{% if (currentRevision != false and revision.rev == currentRevision.rev) %}current-revision{% endif %}\">
                                <td>{{ revision.rev }}</td>
                                <td>{% include admin.getTemplate('history_revision_timestamp') %}</td>
                                <td>{{ revision.username|default('label_unknown_user'|trans({}, 'SonataAdminBundle')) }}</td>
                                <td><a href=\"{{ admin.generateObjectUrl('history_view_revision', object, {'revision': revision.rev }) }}\" class=\"revision-link\" rel=\"{{ revision.rev }}\">{{ \"label_view_revision\"|trans({}, 'SonataAdminBundle') }}</a></td>
                                <td>
                                    {% if (currentRevision == false or revision.rev == currentRevision.rev) %}
                                        /
                                    {% else %}
                                        <a href=\"{{ admin.generateObjectUrl('history_compare_revisions', object, {'base_revision': currentRevision.rev, 'compare_revision': revision.rev }) }}\" class=\"revision-compare-link\" rel=\"{{ revision.rev }}\">{{ 'label_compare_revision'|trans({}, 'SonataAdminBundle') }}</a>
                                    {% endif %}
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id=\"revision-detail\" class=\"col-md-7 revision-detail\">

        </div>
    </div>

    <script>
        jQuery(document).ready(function() {

            jQuery('a.revision-link, a.revision-compare-link').bind('click', function(event) {
                event.stopPropagation();
                event.preventDefault();

                action = jQuery(this).hasClass('revision-link')
                    ? 'show'
                    : 'compare';

                jQuery('#revision-detail').html('');

                if(action == 'show'){
                    jQuery('table#revisions tbody tr').removeClass('current');
                    jQuery(this).parent('').removeClass('current');
                }

                jQuery.ajax({
                    url: jQuery(this).attr('href'),
                    dataType: 'html',
                    success: function(data) {
                        jQuery('#revision-detail').html(data);
                    }
                });

                return false;
            });

        });
    </script>
{% endblock %}
", "SonataAdminBundle:CRUD:base_history.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_history.html.twig");
    }
}
