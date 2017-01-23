<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_960a0adcaa6c0cecc1afbe9f5156d2dcba5e9d4aecdbb5678ebc9bcd59bf1609 extends Twig_Template
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
        $__internal_9f1978a42c486b209b889121a0223e0d212eac57ee32de52cae62c5b49ab3a5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f1978a42c486b209b889121a0223e0d212eac57ee32de52cae62c5b49ab3a5b->enter($__internal_9f1978a42c486b209b889121a0223e0d212eac57ee32de52cae62c5b49ab3a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_77d69344a80089fc4516041302268fc949826b6b12ef14608076dbf602645b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d69344a80089fc4516041302268fc949826b6b12ef14608076dbf602645b35->enter($__internal_77d69344a80089fc4516041302268fc949826b6b12ef14608076dbf602645b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_9f1978a42c486b209b889121a0223e0d212eac57ee32de52cae62c5b49ab3a5b->leave($__internal_9f1978a42c486b209b889121a0223e0d212eac57ee32de52cae62c5b49ab3a5b_prof);

        
        $__internal_77d69344a80089fc4516041302268fc949826b6b12ef14608076dbf602645b35->leave($__internal_77d69344a80089fc4516041302268fc949826b6b12ef14608076dbf602645b35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
