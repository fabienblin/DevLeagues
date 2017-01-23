<?php

/* @SonataAdmin/Block/block_admin_list.html.twig */
class __TwigTemplate_5cf7c6beffda7ff5cf048aa78a9f538d85110867f90e632321ef179c1c9cd63c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataAdmin/Block/block_admin_list.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3be808e5c2a097fa890d1f35b1f96ada83b1f6f364c113445106d7bce197b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3be808e5c2a097fa890d1f35b1f96ada83b1f6f364c113445106d7bce197b9d->enter($__internal_a3be808e5c2a097fa890d1f35b1f96ada83b1f6f364c113445106d7bce197b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_admin_list.html.twig"));

        $__internal_08f4e6787153a24b64d3bd0c56aafec1d63691b1176a9a31b5e1cfadfdb306dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f4e6787153a24b64d3bd0c56aafec1d63691b1176a9a31b5e1cfadfdb306dc->enter($__internal_08f4e6787153a24b64d3bd0c56aafec1d63691b1176a9a31b5e1cfadfdb306dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_admin_list.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3be808e5c2a097fa890d1f35b1f96ada83b1f6f364c113445106d7bce197b9d->leave($__internal_a3be808e5c2a097fa890d1f35b1f96ada83b1f6f364c113445106d7bce197b9d_prof);

        
        $__internal_08f4e6787153a24b64d3bd0c56aafec1d63691b1176a9a31b5e1cfadfdb306dc->leave($__internal_08f4e6787153a24b64d3bd0c56aafec1d63691b1176a9a31b5e1cfadfdb306dc_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_b534496f6b29541ce71452d119a6e863d3f5fa3d2198a6ebff6aebdcb753ed9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b534496f6b29541ce71452d119a6e863d3f5fa3d2198a6ebff6aebdcb753ed9c->enter($__internal_b534496f6b29541ce71452d119a6e863d3f5fa3d2198a6ebff6aebdcb753ed9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_981df90296f5931e857a0770ead434ab9786d49e706507976e831db2dc9078dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_981df90296f5931e857a0770ead434ab9786d49e706507976e831db2dc9078dc->enter($__internal_981df90296f5931e857a0770ead434ab9786d49e706507976e831db2dc9078dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 16
            echo "        ";
            $context["display"] = (twig_test_empty($this->getAttribute($context["group"], "roles", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !($context["display"] ?? $this->getContext($context, "display"))) {
                    // line 18
                    echo "            ";
                    $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                    // line 19
                    echo "        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "
        ";
            // line 21
            if (($context["display"] ?? $this->getContext($context, "display"))) {
                // line 22
                echo "            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group"], "label", array()), array(), $this->getAttribute($context["group"], "label_catalogue", array())), "html", null, true);
                echo "</h3>
                </div>
                <div class=\"box-body\">
                    <table class=\"table table-hover\">
                        <tbody>
                            ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 30
                    echo "                                ";
                    if ((twig_length_filter($this->env, $this->getAttribute($context["admin"], "dashboardActions", array())) > 0)) {
                        // line 31
                        echo "                                            <tr>
                                                <td class=\"sonata-ba-list-label\" width=\"40%\">
                                                    ";
                        // line 33
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["admin"], "label", array()), array(), $this->getAttribute($context["admin"], "translationdomain", array())), "html", null, true);
                        echo "
                                                </td>
                                                <td>
                                                    <div class=\"btn-group\">
                                                        ";
                        // line 37
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["admin"], "dashboardActions", array()));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                            // line 38
                            echo "                                                            ";
                            $this->loadTemplate((($this->getAttribute($context["action"], "template", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "template", array()), "SonataAdminBundle:CRUD:dashboard__action.html.twig")) : ("SonataAdminBundle:CRUD:dashboard__action.html.twig")), "@SonataAdmin/Block/block_admin_list.html.twig", 38)->display(array_merge($context, array("action" => $context["action"])));
                            // line 39
                            echo "                                                        ";
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 40
                        echo "                                                    </div>
                                                </td>
                                            </tr>
                                ";
                    }
                    // line 44
                    echo "                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "                        </tbody>
                    </table>
                </div>
            </div>
        ";
            }
            // line 50
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_981df90296f5931e857a0770ead434ab9786d49e706507976e831db2dc9078dc->leave($__internal_981df90296f5931e857a0770ead434ab9786d49e706507976e831db2dc9078dc_prof);

        
        $__internal_b534496f6b29541ce71452d119a6e863d3f5fa3d2198a6ebff6aebdcb753ed9c->leave($__internal_b534496f6b29541ce71452d119a6e863d3f5fa3d2198a6ebff6aebdcb753ed9c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Block/block_admin_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 50,  187 => 45,  173 => 44,  167 => 40,  153 => 39,  150 => 38,  133 => 37,  126 => 33,  122 => 31,  119 => 30,  102 => 29,  94 => 24,  90 => 22,  88 => 21,  85 => 20,  78 => 19,  75 => 18,  69 => 17,  66 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    {% for group in groups %}
        {% set display = (group.roles is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
        {% for role in group.roles if not display %}
            {% set display = is_granted(role)%}
        {% endfor %}

        {% if display %}
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">{{ group.label|trans({}, group.label_catalogue) }}</h3>
                </div>
                <div class=\"box-body\">
                    <table class=\"table table-hover\">
                        <tbody>
                            {% for admin in group.items %}
                                {% if admin.dashboardActions|length > 0 %}
                                            <tr>
                                                <td class=\"sonata-ba-list-label\" width=\"40%\">
                                                    {{ admin.label|trans({}, admin.translationdomain) }}
                                                </td>
                                                <td>
                                                    <div class=\"btn-group\">
                                                        {% for action in admin.dashboardActions %}
                                                            {% include action.template|default('SonataAdminBundle:CRUD:dashboard__action.html.twig') with {'action': action} %}
                                                        {% endfor %}
                                                    </div>
                                                </td>
                                            </tr>
                                {% endif %}
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        {% endif %}
    {% endfor %}
{% endblock %}
", "@SonataAdmin/Block/block_admin_list.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/Block/block_admin_list.html.twig");
    }
}
