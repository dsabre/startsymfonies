<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_31120c1833cf7490632a8a8ee3fde613ecc3e866a0da60c93ff2f05340a45e73 extends Twig_Template
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
        $__internal_ede78e2933258c8a14db25223562a976a16026fab24381b6a354c1573c2c1d5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ede78e2933258c8a14db25223562a976a16026fab24381b6a354c1573c2c1d5c->enter($__internal_ede78e2933258c8a14db25223562a976a16026fab24381b6a354c1573c2c1d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_86601aba6d95dd41e95f51bd871ae015047e1140414f06e7cb8815674e505f7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86601aba6d95dd41e95f51bd871ae015047e1140414f06e7cb8815674e505f7b->enter($__internal_86601aba6d95dd41e95f51bd871ae015047e1140414f06e7cb8815674e505f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ede78e2933258c8a14db25223562a976a16026fab24381b6a354c1573c2c1d5c->leave($__internal_ede78e2933258c8a14db25223562a976a16026fab24381b6a354c1573c2c1d5c_prof);

        
        $__internal_86601aba6d95dd41e95f51bd871ae015047e1140414f06e7cb8815674e505f7b->leave($__internal_86601aba6d95dd41e95f51bd871ae015047e1140414f06e7cb8815674e505f7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
