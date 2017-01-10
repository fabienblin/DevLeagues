<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_db8b5c5d962629dbeb9976ff7b32dfe11283874236704123342a40fdfbb17ab6 extends Twig_Template
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
        $__internal_cf44bc90968ce0e23ebb50bf809d0f0976685756c78fcf28f421adc4f7cc9ca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf44bc90968ce0e23ebb50bf809d0f0976685756c78fcf28f421adc4f7cc9ca3->enter($__internal_cf44bc90968ce0e23ebb50bf809d0f0976685756c78fcf28f421adc4f7cc9ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_f9125d3d9381510096868df2235b66b684a8801533bd644de958829f859ba20d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9125d3d9381510096868df2235b66b684a8801533bd644de958829f859ba20d->enter($__internal_f9125d3d9381510096868df2235b66b684a8801533bd644de958829f859ba20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_cf44bc90968ce0e23ebb50bf809d0f0976685756c78fcf28f421adc4f7cc9ca3->leave($__internal_cf44bc90968ce0e23ebb50bf809d0f0976685756c78fcf28f421adc4f7cc9ca3_prof);

        
        $__internal_f9125d3d9381510096868df2235b66b684a8801533bd644de958829f859ba20d->leave($__internal_f9125d3d9381510096868df2235b66b684a8801533bd644de958829f859ba20d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
